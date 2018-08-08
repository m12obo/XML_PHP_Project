<?php
/**
 * Created by PhpStorm.
 * User: mik
 * Date: 06/08/2018
 * Time: 21:14
 */
   include('session.php');
?>
<html">

   <head>
      <title>Welcome </title>
   </head>

   <body>
      <h1>Welcome <?php echo $login_session; ?></h1>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>

</html>