<?php
//bu sayfa konf. lari icerir

// bootstrap.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
//Anatasyonlarla meta data okuyarak tablo okuma, yazma vs işlerini yapar
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);


// database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'btb-project',
    'host'     => '127.0.0.1'
);
// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);