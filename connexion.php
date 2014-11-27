<?php
//header('Location: Admin/index.php');      
include("class/UserManager.php");

$login = $_POST['login'];
$pass = $_POST['pass'];
$db = new PDO('mysql:host=cloud.mylittlestorage.fr;dbname=epsimmo', 'epsimmo', 'epsimmo');       
$manager = new UserManager($db);
$manager->verifcon($login,$pass);

if($manager == 1)
{
echo('OK'); 
header('Admin/index.php'); 
}
else
{

echo('erreur'); 
}

?>
