<?php
/**
 * Created by PhpStorm.
 * User: mik
 * Date: 06/08/2018
 * Time: 21:05
 */


   define('DB_SERVER', 'localhost:8080');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'database');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
