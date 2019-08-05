<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019/7/15
 * Time: 17:14
 */

use Scar\Router;

include_once __DIR__ . '/../vendor/autoload.php';

define('SCAR_VERSION', '1.0.0');
define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH',__DIR__.'/..');
define('CACHE_PATH',__DIR__.'/../runtime/cache/');

Scar\Error::register();

$app = new \Scar\App();
$app->run();

