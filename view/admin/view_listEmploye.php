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
       background-image: url(img/web.jpg);
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
			    <center><h1  style="color:white">LISTE EMPLOYER</h1></center>
		<table class="table table-hover">
			<tr class="success">
				<th>id employe</th>
				<th>Numero matricule</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Date de naissance</th>
				<th>Email</th>				
				<th>id_admin</th>				
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php foreach ( $result as $reponse):  //il s'agit simplement une balise ouvrante de foreach?>
				<tr class="info">
					
					<td><?= $reponse['id_emp']?></td>
					<td><?= $reponse['numero_matricule_emp']?></td>
					<td><?= $reponse['nom_emp']?></td>
					<td><?= $reponse['prenom_emp']?></td>
					<td><?= $reponse['date_naissance_emp']?></td>
					<td><?= $reponse['email_emp']?></td>
					<td><?= $reponse['id_admin']?></td>
					<td><button type="button" class="btn btn-primary"><a style="color:white;text-decoration:none" href="?c=modif&numContact=<?=$reponse['id_emp']?>" onclick="return(confirm('Êtes-vous sûr de vouloir modifier cet employé ?'));"><i class="fa fa-cog fa-fw"></i>Modifier</a></button></td>
					<td ><button type="button" class="btn btn-danger"><a  style="color:white;text-decoration:none" href="?c=supr&numContact=<?=$reponse['id_emp']?>" onclick="return(confirm('Êtes-vous sûr de vouloir suprimer cet employé ?'));"><i class="fa fa-trash-o fa-lg"></i>Suprimer</a></button></td>
					
				</tr>
			<?php endforeach; ?>
			

			
		</table>
	</div>

  </body>
</html>
