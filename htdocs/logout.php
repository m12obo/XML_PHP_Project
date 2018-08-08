<?php
/**
 * Created by PhpStorm.
 * User: mik
 * Date: 06/08/2018
 * Time: 21:15
 */
   session_start();

   if(session_destroy()) {
       header("Location: login.php");
   }
?>