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
  <?php include('view/menu/menu_admin.php'); ?>
  <center><h1 style="color: white;">Operation Clients</h1></center>
    <div class="container-fluid">
		<table class="table table-bordered">
			<tr class="warning">
				<th>id_op</th>
				<th>type</th>
				<th>Somme</th>
				<th>Date</th>
				<th>id_compte</th>
				<th>Suprimer</th>
			</tr>
			<?php foreach ( $result as $reponse):  //il s'agit simplement une balise ouvrante de foreach?>
				<tr class="info">
					<td class="active"><?= $reponse['id_op']?></td>
					<td class="active"><?= $reponse['type_op']?></td>
					<td class="active"><?= $reponse['somme_op']?></td>
					<td class="warning"><?= $reponse['date_op']?></td>
					<td class="success"><?= $reponse['id_comp']?></td>
<td ><button type="button" class="btn btn-danger"><a style="color:white;text-decoration:none" href="?c=supop&numContact=<?=$reponse['id_op']?>" onclick="return(confirm('Voulez-vous vraiment supprimer cette opération ?'));"><i class="fa fa-trash-o fa-lg"></i>Suprimer</a></button></td>
				</tr>
			<?php endforeach; ?>
		<!--	
	</td>
	</td>
	</td>
	
	
			-->
		<!--</table>-->
	</div>

  </body>
</html>
