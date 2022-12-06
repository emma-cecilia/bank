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
       background-image: url(;img/cc.jpg);
     }
     .container{
       margin-top: 100px;
       width: 800px;
     }

     </style>
  </head>

  <body>
  <?php include('view/menu/menu_client.php');?>
    <div class="container">
		<!--<table class="table table-bordered">
			<tr class="warning">
				<th>Numero matricule</th>
				<th class="active">Nom</th>
				<th>Prenom</th>
				<th>Date de naissance</th>
				<th>Email</th>
			</tr>-->
			<?php foreach ( $result as $reponse):  //il s'agit simplement une balise ouvrante de foreach?>
				
					<p>vous aves effectuer un virement de :<?= $reponse['virement_op']?>FCFA</p>
					<p>vous aves effectuer un retrait de :<?= $reponse['retrait_op']?>FCFA</p>
					<p>nous somme le :<?= $reponse['date_op']?></p>

				
			<?php endforeach; ?>
		<!--	<tr class="info">
	<td class="active"></td>
	<td class="warning"></td>
	<td class="active"></td>
	<td class="warning"></td>
	<td class="success"></td>
			</tr>-->
		<!--</table>-->
	</div>

  </body>
</html>
