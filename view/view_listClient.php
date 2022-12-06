<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/bootstrap.css" rel="stylesheet"/>
	   <link href="../css/bootstrap-theme.min.css" rel="stylesheet"/>
     
	  <style media="screen">
     body{
       background-image: url(../img/cc.jpg);
     }
     .container{
       margin-top: 100px;
       width: 800px;
     }

     </style>
  </head>

  <body>
    <div class="container">
		<table class="table table-hover">
			<tr class="success">
				<th>Numero matricule</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Date de naissance</th>
				<th>Email</th>
			</tr>
			<?php foreach ( $result as $reponse):  //il s'agit simplement une balise ouvrante de foreach?>
				<tr class="info">
					<td><?= $reponse['id_cl']?></td>
					<td><?= $reponse['numero_matricule_cl']?></td>
					<td><?= $reponse['nom_cl']?></td>
					<td><?= $reponse['prenom_cl']?></td>
					<td><?= $reponse['date_naissance_cl']?></td>
					<td><?= $reponse['email_cl']?></td>

				</tr>
			<?php endforeach; //index.php?c=?>
			

			
		</table>
	</div>

  </body>
</html>
