<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Menu client</title>

		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/style.css"/>
		
	<!--	<style media="screen">
     body{
       background-image: url(../../img/21.jpg);
     }
     .container{
       margin-top: 100px;
       width: 800px;
     }

     </style>-->
		
	</head>

	<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">UB-BANK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="?c=espc">Home</a></li>
	  <li><a href="?c=opcl">Liste operation</a></li>
      <li><a href="?c=ope">operation</a></li>
     
	  <li><a href="?c=iftc">mon compte</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

       <li><a href="#"><?php echo 'Bienvenu(e) '.$_SESSION['nom_cl']?></a></li>
      <li><a href="?c=dcxe"><span  class="glyphicon glyphicon-user">deconnexion</span></a></li>
      <!--<li><a href="#"><span class="glyphicon #glyphicon-log-in"></span> </a></li>-->
	  
	
    </ul>
  </div>
</nav>

        <!-- <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> ARCHITECT</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home-sec">HOME</a></li>
                    <li><a href="#projects">PROJECTS</a></li>
                     <li><a href="#about">ABOUT</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
           
        </div>
    </div>
	
	
	
	
	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html#tf-home" class="scroll">Home</a></li>
                <li><a href="index.html#tf-services" class="scroll">Services</a></li>
                <li><a href="index.html#tf-about" class="scroll">About</a></li>
                <li><a href="index.html#tf-works" class="scroll">Works</a></li>
                <li><a href="index.html#tf-process" class="scroll">Process</a></li>
                <li><a href="index.html#tf-pricing" class="scroll">Pricing</a></li>
                <li><a href="blog.html" class="active scroll">Blog</a></li>
                <li><a href="index.html#tf-contact" class="scroll">Contact</a></li>
              </ul>
            </div>-->
	 <!------------------------------------------>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.js"></script>
	</body>
</html>