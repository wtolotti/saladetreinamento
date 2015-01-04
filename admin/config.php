<?php
// HTTP
define('HTTP_SERVER', 'http://'.$_SERVER['HTTP_HOST'].'/admin/');
define('HTTP_CATALOG', 'http://'.$_SERVER['HTTP_HOST'].'/');

// HTTPS
define('HTTPS_SERVER', 'http://'.$_SERVER['HTTP_HOST'].'/admin/');
define('HTTPS_CATALOG', 'http://'.$_SERVER['HTTP_HOST'].'/');

$pathName = __DIR__.'/';
// DIR
define('DIR_APPLICATION', $pathName);
define('DIR_SYSTEM', dirname($pathName).'/system/');
define('DIR_LANGUAGE', $pathName.'/language/');
define('DIR_TEMPLATE', $pathName.'/view/template/');
define('DIR_CONFIG', dirname($pathName).'/system/config/');
define('DIR_IMAGE', dirname($pathName).'/image/');
define('DIR_CACHE', dirname($pathName).'/system/cache/');
define('DIR_DOWNLOAD', dirname($pathName).'/system/download/');
define('DIR_UPLOAD', dirname($pathName).'/system/upload/');
define('DIR_LOGS', dirname($pathName).'/system/logs/');
define('DIR_MODIFICATION', dirname($pathName).'/system/modification/');
define('DIR_CATALOG', dirname($pathName).'/catalog/');

// DB

define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'saladetreinamento');
define('DB_PREFIX', 'oc_');

// define('DB_DRIVER', 'mysqli');
// define('DB_HOSTNAME', 'us-cdbr-iron-east-01.cleardb.net');
// define('DB_USERNAME', 'b49e2cee6fdf2a');
// define('DB_PASSWORD', '2efaba1b');
// define('DB_DATABASE', 'heroku_51b266ff55873a4');
// define('DB_PREFIX', 'oc_');
