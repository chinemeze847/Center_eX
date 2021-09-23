<?php

namespace Cespess\Web\Core;

use Dotenv\Dotenv;
use League\Route\Router;
use Laminas\Diactoros\ServerRequestFactory;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;

class App {

  private Router $router;

  private static ?App $app = null;

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

  public function run() : void {
    
    $this->loadEnvVariables();

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

}


