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

   <body style="background-color:powderblue;">
        <h1>Welcome <?php echo $login_session; ?></h1>
        <form action="/action_page.php">
            Website URL:<br>
            <input type="text" name="Url" ><br>                                 
            Criteria: <select name="Criteria">
                <option value="Cars">Cars</option>
                <option value="Fashion">Fashion</option>
                <option value="Beauty">Beauty</option>
                <option value="Travel">Travel</option>
            </select>
            <input type="submit" value="Submit">
                                      
        </form>
                                  
        
      
      
      
      
      
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>

</html>