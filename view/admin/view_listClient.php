<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet"/>
	   <link href="css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="css/font-awesome.css" rel="stylesheet"/>
	  <style media="screen">
     body{
       background-image: url(img/pap.jpg);
     }
	  h1{
	  color:white;
	 }
     .container{
       margin-top: 100px;
       width: 800px;
     }
	
     </style>
  </head>

  <body>
  <?php include('view/menu/menu_admin.php'); ?>
    <div class="container-fluid">
		 <center><h1  style="color:white">LISTE CLIENT</h1></center>
		<table class="table table-striped">
			<tr class="success">
				<th>id du client</th>
				<th>Numero matricule</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Date de naissance</th>
				<th>Email</th>							
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php foreach ( $result as $reponse):  //il s'agit simplement une balise ouvrante de foreach?>
				<tr class="info">
					
					<td><?= $reponse['id_cl']?></td>
					<td><?= $reponse['numero_matricule_cl']?></td>
					<td><?= $reponse['nom_cl']?></td>
					<td><?= $reponse['prenom_cl']?></td>
					<td><?= $reponse['date_naissance_cl']?></td>
					<td><?= $reponse['email_cl']?></td>
					<td><a class="btn btn-primary" style="color:white;text-decoration:none" href="?c=modfc&numContact=<?=$reponse['id_cl']?>" onclick="return(confirm('Êtes-vous sûr de vouloir modifier ce client ?'));"> Modifier </a></td>
					
					<td ><a class="btn btn-danger" style="color:white;text-decoration:none" href="?c=suppcl&numContact=<?=$reponse['id_cl']?>" onclick="return(confirm('Êtes-vous sûr de vouloir supprimer cet client ?'));"> Suprimer </a></td>
					
				</tr>
			<?php endforeach; //index.php?c=?>
			

			<!-- <button type="button" id="btn"  class="btn btn-danger" ><a style="color:white;text-decoration:none" href="?c=sup&numContact=$reponse['id_cl']?> ">Supprimer</a>-->
		</table>
	</div>

  </body>
</html>
