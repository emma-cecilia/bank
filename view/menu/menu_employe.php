<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Menu employe</title>

		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="../../css/bootstrap-theme.min.css" rel="stylesheet"/>
		<link rel="../../stylesheet" href="css/style.css"/>
		
		<!-- <style media="screen">
     // body{
       // background-image: url(../../img/3.jpg);
     // }
     // .container{
       // margin-top: 100px;
       // width: 800px;
     // }

     // </style-->
		
	</head>

	<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">UB-GENC</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?c=espem">Home</a></li>
      <li><a href="?c=adc">ajouter client</a></li>
      <li><a href="?c=infem">profil</a></li>
	  <!--<li><a href="?c=lstc">liste clients</a></li>
      <li><a href="?c=afcp">gestion de compte</a></li>-->
    </ul>
    <ul class="nav navbar-nav navbar-right">
	<li><a href="#"><?php echo 'Bienvenu(e) '.$_SESSION['nom_emp']?></a></li>
	<li><a href="?c=dcnem"><span class="glyphicon glyphicon-user"></span>deconnexion</a></li>
      <!--<li><a href="#"><span class="glyphicon #glyphicon-log-in"></span> </a></li>-->
    </ul>
  </div>
</nav>
  <!------------------------------------------>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.js"></script>
	</body>
</html>