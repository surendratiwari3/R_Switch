<?php
$PRODUCT_NAME = "R Switch";
$production = file_exists(dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . "production");

if ($production):
    error_reporting(E_ERROR);
    $WEB_URL = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    $DOCUMENT_PATH = $_SERVER['DOCUMENT_ROOT'] . '/';
    $HOST_NAME = "104.251.215.140";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "VnxtNgmF12345";
    $DB_NAME = "class_4_switch";    
else:
    $WEB_URL = 'http://' . $_SERVER['HTTP_HOST'] . '/r_switch/';
    $DOCUMENT_PATH = $_SERVER['DOCUMENT_ROOT'] . '/r_switch/';
    $HOST_NAME = "localhost";
    $DB_USERNAME = "root";
    $DB_PASSWORD = "root";
    $DB_NAME = "class_4_switch";
endif;

$UPLOADS_PATH = $DOCUMENT_PATH . "uploads/";
$UPLOADS_URL = $WEB_URL . "uploads/";
