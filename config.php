<?php
/**
 * Created by PhpStorm.
 * User: ormazd
 * Date: 7/3/2020
 * Time: 2:16 AM
 */
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Tehran');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$host = "localhost";
$database = "yo";
$db_user = "root";
$db_pass = "";
$web_url = "http://localhost/yo/";
$c_unit="تومان";
header_remove("X-Powered-By");
header_remove("Server");
?>