<?php
// HTTP
define('HTTP_SERVER', 'http://kompliment.me/admin/');
define('HTTP_CATALOG', 'http://kompliment.me/');

// HTTPS
define('HTTPS_SERVER', 'https://kompliment.me/admin/');
define('HTTPS_CATALOG', 'https://kompliment.me/');

// DIR ROOT
define('DIR_ROOT', $_SERVER['DOCUMENT_ROOT']);

// DIR
define('DIR_APPLICATION', DIR_ROOT . '/admin/');
define('DIR_SYSTEM', DIR_ROOT . '/system/');
define('DIR_IMAGE', DIR_ROOT . '/image/');
define('DIR_STORAGE', DIR_ROOT . '/storage/');
define('DIR_CATALOG', DIR_ROOT . '/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'aspect2com_me');
define('DB_PASSWORD', 'lwIdWuXhDVGRQR77VjN1');
define('DB_DATABASE', 'aspect2com_me');
define('DB_PORT', '3306');
define('DB_PREFIX', 'defina_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
define('OPENCARTFORUM_SERVER', 'https://opencartforum.com/');