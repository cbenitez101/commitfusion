<?php
/**
 * Defines the GLOBAL parameters
 */
global $includeheader;
$includeheader=array('js' => array(), 'css' => array());
global $includebody;
$includebody=array();
global $fulldomain;
//$fulldomain='/var/www/vhosts/servibyte.com/servibyte.net';
$fulldomain=getcwd();
global $mediapath;
$mediapath = $fulldomain;

/**
 * Only these values are allowed in the first part of the URI
 * Otherwise the call is redirected to the mainpage
 */
$pages = array(
    'login',
    'inicio',
    'configuracion',
    'contrasena',
    'tickets',
    'contabilidad',
    'mantenimiento'
    );

/**
 * Settings for all pages
 */
define(SMARTY_DIR, __DIR__.'/../libs/');


define(DOMAIN, 'http://'.$_SERVER['SERVER_NAME'].((strstr($_SERVER['SERVER_NAME'], '192.168'))?':8080':''));
//define(DOMAIN, 'http://localhost:8888');

define(__DBHOST__, 'localhost');
define(__DBUSER__, 'plataforma');
define(__DBPASS__, 'christo');
define(__DBNAME__, 'plataforma');

define(__RAHOST__, 'localhost');
define(__RAUSER__, 'plataforma');
define(__RAPASS__, 'christo');
define(__RANAME__, 'radius');
?>
