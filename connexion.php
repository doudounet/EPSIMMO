<?php
//header('Location: Admin/index.php');      
include ("class/UserManager.php");
     
$pdo = new PDO('mysql:host=cloud.mylittlestorage.fr;dbname=epsimmo', 'epsimmo', 'epsimmo');       





?>



<!DOCTYPE html>
<html>
 <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <link rel="shortcut icon" type="image/ico" href="img/favicon.gif" />
   
   <title> titre </title>
 </head>
 <body>

 <A HREF="Admin/index.php">Accés Admin</A> 
 <A HREF="Customer/index.php">Accés Client</A> 
 </body>
</html>