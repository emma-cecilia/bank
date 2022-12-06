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
    <div class="container">
 
			    <center><h1>LISTE EMPLOYER</h1></center>
		<table class="table table-striped">
			<tr class="success">
				<th>Numero matricule</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Date de naissance</th>
				<th>Email</th>
			</tr>
			<?php foreach ( $result as $reponse):  //il s'agit simplement une balise ouvrante de foreach?>
				<tr class="info">
					<td><?= $reponse['id_emp']?></td>
					<td><?= $reponse['numero_matricule_emp']?></td>
					<td><?= $reponse['nom_emp']?></td>
					<td><?= $reponse['prenom_emp']?></td>
					<td><?= $reponse['date_naissance_emp']?></td>
					<td><?= $reponse['email_emp']?></td>

				</tr>
			<?php endforeach; //index.php?c=?>
			

			
		</table>
	</div>

  </body>
</html>
