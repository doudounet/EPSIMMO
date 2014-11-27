<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<!-- Custom TABLE Ajouté florian -->
<script src="js/tooltip.js"></script>
<script src="js/modal.js"></script>

    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Gestion<small> des clients</small>
                        </h1>
                        <ol class="breadcrumb">
                          <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                        </ol>
                        <p><button class="btn btn-warning btn-xs" data-title="create" data-toggle="modal" data-target="#create" data-placement="top" rel="tooltip">Ajouter une fiche client</button></p> 

                    </div>
                </div>
            
                <!-- /.row -->

              <div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4></h4>
        <div class="table-responsive">
        
                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
                   <th>Nom</th>
                   <th>Prénom</th>
                   <th>date naissance</th>
                   <th>email</th>
                   <th>tel</th>
                   <th>adresse</th>
                   <th>asup</th>
                   <th>CP</th>
                   <th>Ville</th>
                   <th>type</th>
                   <th>Mot de passe</th>
                   
                    <th>Edit</th>
                    <th>Delete</th>
                   </thead>
    <tbody>
    
    <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>10/02/2014</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    
        <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>11/02/2014</td>
     <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
    </tr>
    
  
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
	</div>
</div>

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Entrer les informations</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        	<input class="form-control " type="text" placeholder="nom" name="nom">
          </div>
        <div class="form-group">
        	<input class="form-control " type="text" placeholder="prenom" name="prenom">
        </div>
        <div class="form-group">
    		<input class="form-control " type="date" placeholder="Date naissance" name="dateNaissance">
        </div>
         <div class="form-group">
        <input class="form-control " type="email" placeholder="email" name="email">
        </div>
         <div class="form-group">
        <input class="form-control " type="tel" placeholder="tel" name="tel">
        </div>
         <div class="form-group">
    		<input class="form-control " type="text" placeholder="Adresse" name="addresse">
        </div>
        <div class="form-group">
        <input class="form-control " type="text" placeholder="Adresse sup" name="asup">
        </div>
          <div class="form-group">
        <input class="form-control " type="text" placeholder="cp" name="cp">
        </div>
          <div class="form-group">
        <input class="form-control " type="text" placeholder="ville" name="ville">
        </div>
          <div class="form-group">
        <input class="form-control " type="number" placeholder="type" name="type">
        </div>
        <div class="form-group">
    		<input class="form-control " type="password" placeholder="mot de passe" name="mdp">
        </div>
       

    
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span>ajouter</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Editer ficher client</h4>
      </div>
          <div class="modal-body">
            <div class="form-group">
          <input class="form-control " type="text" placeholder="nom" name="nom">
          </div>
        <div class="form-group">
          <input class="form-control " type="text" placeholder="prenom" name="prenom">
        </div>
        <div class="form-group">
        <input class="form-control " type="date" placeholder="Date naissance" name="dateNaissance">
        </div>
         <div class="form-group">
        <input class="form-control " type="email" placeholder="email" name="email">
        </div>
         <div class="form-group">
        <input class="form-control " type="tel" placeholder="tel" name="tel">
        </div>
         <div class="form-group">
        <input class="form-control " type="text" placeholder="Adresse" name="addresse">
        </div>
        <div class="form-group">
        <input class="form-control " type="text" placeholder="Adresse sup" name="asup">
        </div>
          <div class="form-group">
        <input class="form-control " type="text" placeholder="cp" name="cp">
        </div>
          <div class="form-group">
        <input class="form-control " type="text" placeholder="ville" name="ville">
        </div>
          <div class="form-group">
        <input class="form-control " type="number" placeholder="type" name="type">
        </div>
        <div class="form-group">
        <input class="form-control " type="password" placeholder="mot de passe" name="mdp">
        </div>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-warning"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
