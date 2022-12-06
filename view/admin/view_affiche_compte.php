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
       background-image: url(img/fn.jpg); 
     }
	 img{
	 width: 500px;
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
		 <center><h1  style="color:white">GESTION DE COMPTE</h1></center>
		<table class="table table-hover">
			<tr class="success">
				<th>id compte</th>
				<th>Numero du compte</th>
				<th>Solde du compte</th>
				<th>Type de compte</th>
				<th>date de creation</th>				
				<th>id employe</th>				
				<th>id client</th>				
				<th>Modifier</th>
				<th>Suprimer</th>
			</tr>
			<?php foreach ( $result as $reponse):  //il s'agit simplement une balise ouvrante de foreach?>
				<tr class="info">
					
					<td><?= $reponse['id_comp']?></td>
					<td><?= $reponse['numero_comp']?></td>
					<td><?= $reponse['solde_comp']?></td>
					<td><?= $reponse['type_comp']?></td>					
					<td><?= $reponse['date_creation_comp']?></td>
					<td><?= $reponse['id_emp']?></td>
					<td><?= $reponse['id_cl']?></td>
					<td><button type="button" class="btn btn-primary"><a style="color:white;text-decoration:none" href="?c=modcm&numContact=<?=$reponse['id_comp']?>" onclick="return(confirm('Êtes-vous sûr de vouloir modifier ce compte ?'));"><i class="fa fa-cog fa-fw"></i>Modifier</a></button></td>
					<td ><button type="button" class="btn btn-danger"><a style="color:white;text-decoration:none" href="?c=supct&numContact=<?=$reponse['id_comp']?>" onclick="return(confirm('Êtes-vous sûr de vouloir supprimer ce compte ?'));"><i class="fa fa-trash-o fa-lg"></i>Suprimer</a></button></td>
					
				</tr>
			<?php endforeach; //index.php?c=?>
			

			<!--<a onclick="return confirm('voulez vous vraiment suprimer');"-->
		</table>
	</div>

  </body>
</html>
