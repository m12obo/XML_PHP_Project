<?php

/**
 * Created by PhpStorm.
 * User: mik
 * Date: 06/08/2018
 * Time: 21:08
 */
 


   include("config.php");
   session_start();
   $error = "";

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
		
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
	  
      $sql = "SELECT id FROM testTable WHERE username = '" . $myusername . "' and password = '". $mypassword ."'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
	  

      $sql = "SELECT username, password FROM testTable";
      $result = $db->query($sql);
       echo $result->num_rows;
      if ($result->num_rows > 0) {
       
           while($row = $result->fetch_assoc()) {
                if ($row['username'] == $myusername && $row['password'] == $mypassword) {
                    $_SESSION['login_user'] = $myusername;
                    header('location: welcome.php');
		            exit();
                }
           }
           $error = "Your Login Name or Password is invalid";
        }
    }
?>
<html>

   <head>
      <title>Login Page</title>

      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 2px;
         }
      </style>

   </head>

   <body bgcolor = "#FFFFFF">

      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error ?></div>

            </div>

         </div>

      </div>

   </body>
</html>