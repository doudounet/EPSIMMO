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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> 
	 <script type='text/javascript'>
   function divaffiche(){ 
	document.getElementById("demandepwd").style.display = "block"; 
   	document.getElementById("pwdforgotten").style.display = "none"; 
   	 
   	} 
   
   function divhidden(){ 
		document.getElementById("demandepwd").style.display = "none"; 
		document.getElementById("pwdforgotten").style.display = "none"; 
	   	 
	   	} 
  
  </script>
</head>
<body>


=
	<div class="container">
		<div class="row">
			<div class="col-lg-6">

				<div class="login-panel">
					<h3 id="title">EPSI IMMO</h3>
					<form action="connexion.php" method="post">
					<?php if (isset($merreur)) echo $merreur; ?>
					<input type="text" class="form-control" placeholder="Email address" required=""  name="login" id="field1">
                        <input type="password" class="form-control" placeholder="Password" required="" name="pass" id="field2">
                       
                        <input  class="btn-connect btn btn-success" type="submit" value="Me connecter" /><br/>
						<br/>
                       <button type="button" id="pwdforgotten" class="btn btn-warning" onClick="divaffiche()" > Mot de passe oublié </button>
					   <br/>
					   <br/>
					   <a href="signin.php" type="button" id="createEPC" class="btn btn-info"  > Créer un compte </a>
                      </form>
					  
					  
					  <div id="demandepwd"  style="display:none;">
				
					<form class="form-horizontal"  name="resetPasswordForm" id="resetPasswordForm">
						<div class="control-group">
							<label class="control-label"> Login </label>
								<div class="controls">
									<span class="help-block">Renseignez votre mail afin de recevoir le mot de passe </span>
									
									<input type="text" name="email"/>
									<button type="button" class="btn btn-info" onClick="divhidden()" > Valider </button>
								</div>
						</div>
						</form>
				</div>
				</div>
			
				
			</div>
		</div>
		</div>
			
			
				

</body>
</html>