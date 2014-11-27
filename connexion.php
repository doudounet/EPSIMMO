<?php
//header('Location: Admin/index.php'); 
   
//require('class/UserManager.php');

$login = $_POST['login'];
$pass = $_POST['pass'];
 
$u = 'epsimmo';
$p = 'epsimmo';
try 
{

    $db = new PDO('mysql:host=localhost;dbname=epsimmo', $u, $p);
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
echo 'connexion ok';

try 
{

    $manager = $db->query("SELECT COUNT(*) AS ok FROM client WHERE email='$login' AND mdp='$pass'")->fetchColumn();
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

try 
{

	$resultats=$db->query("SELECT idtype FROM client WHERE email='$login' AND mdp='$pass'");
	$resultats->setFetchMode(PDO::FETCH_OBJ);
	
while( $resultat = $resultats->fetch() )
{
        $droit = $resultat->idtype; 
}
$resultats->closeCursor();

echo $droit;
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


echo($manager);

if($manager == 1)
{
	if($droit ==1)
	{
	header('Location: Admin/index.php');   
	}
	else
	{
	header('Location: Customer/index.php');
	}
}
else
{
header('Location: index.php');
}

?>
