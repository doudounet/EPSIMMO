<?php

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
					<form action="connexion.php" method="post">
					<?php if (isset($merreur)) echo $merreur; ?>
					<input type="text" class="form-control" placeholder="Email address" required=""  name="login" id="field1">
                        <input type="password" class="form-control" placeholder="Password" required="" name="pass" id="field2">
                       
                        <input  class="btn-connect btn btn-warning" type="submit" value="Me connecter" /><br/>
                        <a href="#" id="password-forgert">Mot de passe perdu?</a>
                      </form>
				</div>

			</div>
		</div>

	</div>

</body>
</html>