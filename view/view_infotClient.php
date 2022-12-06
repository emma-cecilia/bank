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
       background-image: url(img/pat.png);
     }
     .container{
       margin-top: 100px;
       width: 800px;
     }
     </style>
  </head>

  <body>
  <?php include('view/menu/menu_client.php'); ?>
  <center><h1 style="color: white;">mon profil</h1></center>
    <div class="container-fluid">
		<table class="table">

			<tr class="warning">
				<th>nom_cl</th>
				<th>prenom_cl</th>
				<th>numero_matricule_cl</th>
				<th class="active">date_naissance_cl</th>
				<th>email_cl</th>
			</tr>
			  
				<tr class="info">
					<td class="active"><?php echo ' '.$_SESSION['nom_cl']?></td>
					<td class="active"><?php echo ' '.$_SESSION['prenom_cl']?></td>
					<td class="active"><?php echo ' '.$_SESSION['numero_matricule_cl']?></td>
					<td class="warning"><?php echo' '.$_SESSION['date_naissance_cl']?></td>
					<td class="active"><?php echo ' '.$_SESSION['email_cl']?></td>	
				</tr>
			</table>
			
			<table class="table table-condensed">
			<tr class="success">
			<th>Numero du compte</th>
			<th>Solde du compte</th>
			<th>Type de compte</th>
			<th>date de creation</th>
			</tr>

			<center><h1 style="color: white;">Compte</h1></center>
				<tr class="warning">
					<td class="active"><?php echo ' '.$_SESSION['numero_comp']?></td>
					<td class="success"><?php echo ' '.$_SESSION['solde_comp']?></td>
					<td class="warning"><?php echo ' '.$_SESSION['type_comp']?></td>
					<td class="danger"><?php echo ' '.$_SESSION['date_creation_comp']?></td>
				</tr>
			</table>
		
			
			
			
		
	</div>

  </body>
</html>
