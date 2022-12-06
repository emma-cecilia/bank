<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet"/>
	   <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
     
	  <style media="screen">
     body{
       background-image: url(img/5720.jpg);
     }
     .container{
       margin-top: 100px;
       width: 800px;
     }
     </style>
  </head>

  <body>
  <?php include('view/menu/menu_employe.php'); ?>
  <center><h1 style="color: white;">mon profil</h1></center>
    <div class="container-fluid">
		<table class="table table-bordered">
			<tr class="warning">
				<th>nom_emp</th>
				<th class="active">prenom_emp</th>
				<th>date_naissance_emp</th>
				<th class="active">email_emp</th>
				<th>numero_matricule_emp</th>
			</tr>
			  
				<tr class="info">
					<td class="active"><?php echo ' '.$_SESSION['nom_emp']?></td>
					<td class="active"><?php echo ' '.$_SESSION['prenom_emp']?></td>
					<td class="active"><?php echo ' '.$_SESSION['date_naissance_emp']?></td>
					<td class="warning"><?php echo ' '.$_SESSION['email_emp']?></td>
					<td class="active"><?php echo ' '.$_SESSION['numero_matricule_emp']?></td>
					
				</tr>
			
		<!--	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
	<li><a href="#"></a></li>
       
	</td>
	</td>
	</td>
	
	
			-->
		<!--</table>-->
	</div>

  </body>
</html>
