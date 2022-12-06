<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Mon formulaire</title>

		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/style.css"/>
		<style>
			body {
          background-image: url("img/wa.jpg");
        }.container{
		margin-top: 160px;
		width:50%;
		border-radius: 25px;
		}#exampleInputEmail1{
	 border-radius: 10px;
	 height: 40px;
	 }#exampleInputPassword1{
	 border-radius: 10px;
	 height: 40px;
	 }
		</style>
	</head>

	<body>
<h1><a href="?c="><img src="img/ba.png"/></a></h1>
	  <div class="container" style="background-color:#F5FFFA;">
		 <form method="POST" action="" enctype="multipart/form-data">
		 
		 	<h1 style="text-align:center;color:black">CONNEXION ADMIN</h1>	
			
	<br>
			<div class="input-group">
      <span class="input-group-addon" id="basic-addon1">@</span>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email_admin"/>
			</div><br>
			
			<div class="input-group">
	  <span class="input-group-addon glyphicon glyphicon-lock"></span>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="motdePass_admin"/>
			</div><br>

			<div style="float:left;margin-left:20%">
				<button type="submit" class="btn btn-primary" name="connecter">Enregistrer</button>
			</div>
				 
			<div style="float:right;margin-right:20%">
				<button type="reset" class="btn btn-danger" name="annuler">Annuler</button>
			</div>
		 </form>
		 
	  </div>
		
		
		
  <!------------------------------------------>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.js"></script>
	</body>
</html>