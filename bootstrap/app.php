<?php

use Phalcon\Loader as PhalconLoader;
use Phalcon\Di\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Url as UrlProvider;
use Phalcon\Mvc\Application;
use CameronSmith\PhalconPHP\Helpers\Path;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Db\Adapter\Pdo\Mysql;
use Dotenv\Dotenv;

/**
 * Load environment file.
 */

(Dotenv::create(Path::getRootPath()))->load();

$loader = new PhalconLoader();
$loader->registerDirs(
    [
        Path::getAppPath() . 'Controllers/',
        Path::getAppPath() . 'Models/',
    ]
);

$loader->registerNamespaces(
    [
        'CameronSmith\PhalconPHP\Controllers' =>  Path::getAppPath() . 'Controllers/',
        'CameronSmith\PhalconPHP\Models'      =>  Path::getAppPath() . 'Models/',
    ]
);


$loader->register();
$di = new FactoryDefault();

$di->set(
    'view',
    function () {
        $view = new View();
        $view->setViewsDir(Path::getAppPath() . 'views');
        return $view;
    }
);

$di->set(
    'url',
    function () {
        $url = new UrlProvider();
        $url->setBaseUri('/');
        return $url;
    }
);

$di->set(
    'dispatcher',
    function () {
        $dispatcher = new Dispatcher();

        $dispatcher->setDefaultNamespace(
            'CameronSmith\PhalconPHP\Controllers'
        );

        return $dispatcher;
    }
);

$di->set(
    'db',
    function () {
        return new Mysql(
            [
                'host'     => '127.0.0.1',
                'username' => getenv('DB_USER'),
                'password' => getenv('DB_PASSWORD'),
                'dbname'   => getenv('DB_DATABASE'),
            ]
        );
    }
);

return new Application($di);
