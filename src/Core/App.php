<?php

namespace Cespess\Web\Core;

use Dotenv\Dotenv;
use League\Route\Router;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\RedirectResponse;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\PhpFileLoader;
use Symfony\Bridge\Twig\Extension\TranslationExtension;

use Aura\Session\SessionFactory;
use Aura\Session\Segment as SessionSegment;

class App {

  public static string $BASE_URL = '';

  private static ?App $app = null;
  
  private Router $router;

  private ?SessionSegment $session = null;

  private ?Translator $translator = null;

  private function __construct() {}

  public static function getInstance() : App {
    if (static::$app === null) {
      static::$app = new App;
    }
    return static::$app;
  }

  public static function route() : Router {
    return static::getInstance()->router;
  }

  public function createSession() : SessionSegment {
    $session_factory = new SessionFactory;
    $session = $session_factory->newInstance($_COOKIE);
    return $session->getSegment(static::class);
  }

  public function getSession() : SessionSegment {
    if ($this->session === null) {
      $this->session = $this->createSession();
    }
    return $this->session;
  }

  public static function session() : SessionSegment {
    return static::getInstance()->getSession();
  }

  public function run() : void {
    
    $this->loadEnvVariables();

    static::$BASE_URL = $_ENV['APP_URL'];

    $this->loadRoutes();

    $response = $this->router->dispatch($this->createRequest());
    
    (new SapiEmitter)->emit($response);
  }

  private function loadEnvVariables() : void {
    $dotenv = Dotenv::createImmutable(dirname(dirname(__DIR__)));
    $dotenv->safeLoad();
    $dotenv->required(['DB_HOST', 'DB_DATABASE', 'DB_USERNAME', 'DB_PASSWORD'])->notEmpty();
  }

  private function loadRoutes() : void {
    $this->router = new Router;
    $routeFiles = explode(',', $_ENV['ROUTE_FILES']);
    foreach ($routeFiles as $file) {
      require dirname(__DIR__)."/Route/{$file}.php";
    }
  }

  private function createRequest() : ServerRequestInterface {
    return ServerRequestFactory::fromGlobals($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES);
  }

  private function createTranslator() : Translator {
    $translator = new Translator('en');
    $translator->setFallbackLocales(['en']);
    $translator->addLoader('php', new PhpFileLoader());
    $translator->addResource('php', dirname(__DIR__).'/Locale/strings.en.php', 'en');
    return $translator;
  }

  private function getTranslator() : Translator {
    if ($this->translator === null) {
      $this->translator = $this->createTranslator();
    }
    return $this->translator;
  }

  public static function trans(string $key, array $formats = []) : string {
    return static::getInstance()->getTranslator()->trans($key, $formats);
  }

  private static function getTwig() : Environment {
    $loader = new FilesystemLoader(dirname(__DIR__).'/View');
    return new Environment($loader, [
        'debug' => $_ENV['APP_ENV'] === 'local' ? true : false,
        'cache' => dirname(dirname(__DIR__)).'/storage/cache/views',
    ]);
  }

  public static function view(string $name, array $params = []) : ResponseInterface {
    $twig = static::getTwig();
    $twig->addGlobal('session', static::getInstance()->getSession());
    $twig->addExtension(new TranslationExtension(static::getInstance()->getTranslator()));
    $html = $twig->render($name.'.html', $params);
    return new HtmlResponse($html);
  }

  public static function redirectWithFormData(string $url, array $inputs, array $errors) : ResponseInterface {
    App::session()->setFlash('values', $inputs);
    App::session()->setFlash('errors', $errors);
    return new RedirectResponse(static::$BASE_URL.$url);
  }


}


