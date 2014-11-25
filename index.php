<?php
session_start();

//on vérifie que le login/mdp sont bien envoyé
//on vérifie que le login/mdp ne sont pas vide
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])) {
	extract($_POST);
	/*$pass = sha1($pass);*/
	mysql_connect("localhost","root","");
	mysql_select_db("clamarque");
	$sql = " SELECT * FROM invites where login='$login' AND pass='$pass'";
$req = mysql_query($sql) or die (mysql_error());
//indique le nombre de resultat trouvée
if( mysql_num_rows($req)>0) {
	$data = mysql_fetch_assoc($req);
$_SESSION['Auth'] = array(
'login' => $login,
'pass' => $pass
/*
'role' => $data['role']*/
);

header('Location:menu.php');
}
else{
	 $merreur="<h3 class=error-login>Mauvais identifiants</h3>";
 }
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/c.ico">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Bootstrap core CSS -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">

				<div class="login-panel">
					<h3 id="title">EPSI IMMO</h3>
					<form action="index.php" method="post">
					<?php if (isset($merreur)) echo $merreur; ?>
					<input type="text" class="form-control" placeholder="Email address" required=""  name="login" id="field1">
                        <input type="password" class="form-control" placeholder="Password" required="" name="pass" id="field2">
                       
                        <input  class="btn-connect btn btn-warning" type="submit" value="Me connecter" /><br/>
                        <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Mot de passe oublié ? </a>
                      </form>
				</div>

			</div>
		</div>
				<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">×</span>
									<span class="sr-only">Close</span>
								</button>
								<h4 class="modal-title">Récupération du mot de passe</h4>
							</div>
							<div class="modal-body">
								<p>Votre adresse mail : </p>
								<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
								<button type="button" class="btn btn-custom">Soumettre</button>
							</div>
						</div> <!-- /.modal-content -->
					</div> <!-- /.modal-dialog -->
				</div> <!-- /.modal -->
	</div>

</body>
</html>