<?php
session_start();
require("auth.php");
if(Auth::isLogged()){
    
}
else{
    header('Location:index.php');
}
?>
<html><head><style id="flot-default-styles">.flot-tick-label {font-size:smaller;color:#545454;}</style>
	<title>JACA Admin - Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="css/bootstrap-overrides.css" type="text/css" rel="stylesheet">

    <!-- libraries -->
    <link href="css/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="css/compiled/layout.css">
    <link rel="stylesheet" type="text/css" href="css/compiled/elements.css">
    <link rel="stylesheet" type="text/css" href="css/compiled/icons.css">

    <!-- this page specific styles -->
    <link rel="stylesheet" href="css/compiled/index.css" type="text/css" media="screen">

    <!-- open sans font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">

    <!-- lato font -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<style type="text/css"></style></head>
<body class="">
    <!-- navbar -->
    <header class="navbar navbar-inverse" role="banner">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" id="menu-toggler">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <p>Menu Client</p>
            </a>
        </div>
        <ul class="nav navbar-nav pull-right hidden-xs">
            <li class="hidden-xs hidden-sm">
                <input class="search" type="text">
            </li>
            <li class="settings hidden-xs hidden-sm">
                <a href="#" role="button">
                <i class="fa fa-user"></i>
                </a>
            </li>
            <li class="settings hidden-xs hidden-sm">
                <a href="logout.php" role="button">
                    <i class="fa fa-power-off"></i>
                </a>
            </li>
        </ul>
    </header>
    <!-- end navbar -->
    <!-- sidebar -->
    <div id="sidebar-nav">
        <ul id="dashboard-menu">
            <li class="active">
                <div class="pointer">
                    <div class="arrow"></div>
                    <div class="arrow_border"></div>
                </div>
                <a href="index.html">
                    <i class="fa fa-home"></i>
                    <span>Accueil</span>
                </a>
            </li>        
            <li>
                <a href="logout.php">
                    <i class="fa fa-power-off"></i>
                    <span>Déconnexion</span>
                </a>
            </li> 
        </ul>
    </div>
    <!-- end sidebar -->
	<!-- main container -->
    <div class="content">

        <!-- upper main stats -->
        <div id="main-stats">
            <div class="row stats-row">
                <div class="col-md-3 col-sm-3 stat">
                    <div class="data">
                        <span class="number">2457</span>
                        visits
                    </div>
                    <span class="date">Today</span>
                </div>
                <div class="col-md-3 col-sm-3 stat">
                    <div class="data">
                        <span class="number">3240</span>
                        users
                    </div>
                    <span class="date">February 2013</span>
                </div>
                <div class="col-md-3 col-sm-3 stat">
                    <div class="data">
                        <span class="number">322</span>
                        orders
                    </div>
                    <span class="date">This week</span>
                </div>
                <div class="col-md-3 col-sm-3 stat last">
                    <div class="data">
                        <span class="number">$2,340</span>
                        sales
                    </div>
                    <span class="date">last 30 days</span>
                </div>
            </div>
        </div>
        <!-- end upper main stats -->

        <div id="pad-wrapper">
            <!-- statistics -->
            <div class="row chart">
                <div class="col-md-12">
                    <h4 class="clearfix pull-left">
                        Bienvenue                         
                    </h4>
                    
                </div>
               
            </div>
        </div>
    </div>
	<!-- scripts -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body></html>