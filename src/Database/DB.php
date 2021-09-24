<?php

namespace Cespess\Web\Database;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class DB {

  private static ?EntityManager $manager = null;

  private static function conn() : EntityManager {
    $paths = array(dirname(__DIR__).'/Model');
    $isDevMode = true;

    $dbParams = array(
        'host'     => $_ENV['DB_HOST'],
        'driver'   => $_ENV['DB_DRIVER'],
        'user'     => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'dbname'   => $_ENV['DB_DATABASE'],
    );

    $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
    return EntityManager::create($dbParams, $config);
  }

  private static function getManager() : EntityManager {
    if (static::$manager === null) {
      static::$manager = static::conn();
    }
    return static::$manager;
  }

  public static function db() : EntityManager {
    return static::getManager();
  }

}




