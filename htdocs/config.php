<?php
/**
 * Created by PhpStorm.
 * User: mik
 * Date: 06/08/2018
 * Time: 21:05
 */

    echo "in config";
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'admin');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'testDB');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>