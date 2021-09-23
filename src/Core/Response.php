<?php

namespace Cespess\Web\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Laminas\Diactoros\Response\HtmlResponse;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\PhpFileLoader;
use Symfony\Bridge\Twig\Extension\TranslationExtension;


class Response {

  private static ?Translator $translator = null;

  private static function createTranslator() : Translator {
    $translator = new Translator('en');
    $translator->setFallbackLocales(['en']);
    $translator->addLoader('php', new PhpFileLoader());
    $translator->addResource('php', dirname(__DIR__).'/Locale/strings.en.php', 'en');
    return $translator;
  }

  private static function getTranslator() : Translator {
    if (static::$translator === null) {
      static::$translator = static::createTranslator();
    }
    return static::$translator;
  }

  public static function trans(string $key, array $formats = []) : string {
    return static::getTranslator()->trans($key, $formats);
  }

  private static function getTwig() : Environment {
    $loader = new FilesystemLoader(dirname(__DIR__).'/View');
    return new Environment($loader, [
        'debug' => $_ENV['APP_ENV'] === 'local' ? true : false,
        'cache' => dirname(dirname(__DIR__)).'/storage/cache/views',
    ]);
  }

  public static function view(string $name, array $params = []) : HtmlResponse {
    $twig = static::getTwig();
    $twig->addExtension(new TranslationExtension(static::getTranslator()));
    $html = $twig->render($name.'.html', $params);
    return new HtmlResponse($html);
  }

}



