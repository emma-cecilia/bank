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
       background-image: url(img/cc.jpg);
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
  <?php include('view/menu/menu_employe.php'); ?>
    <div class="container">
		 <center><h1  style="color:white">GESTION DE COMPTE</h1></center>
		<table class="table table-hover">
			<tr class="success">
				<th>Numero du compte</th>
				<th>Solde du compte</th>
				<th>Type de compte</th>
				<th>date de creation</th>
			</tr>
			<?php foreach ( $result as $reponse):  //il s'agit simplement une balise ouvrante de foreach?>
				<tr class="info">
					
					<td><?= $reponse['numero_comp']?></td>
					<td><?= $reponse['solde_comp']?></td>
					<td><?= $reponse['type_comp']?></td>					
					<td><?= $reponse['date_creation_comp']?></td>
				</tr>
			<?php endforeach; //index.php?c=?>
			

			
		</table>
	</div>

  </body>
</html>
