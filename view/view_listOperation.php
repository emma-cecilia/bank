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
  <center><h1 style="color: white;">Operation Clients</h1></center>
    <div class="container-fluid">
		<table class="table table-bordered">
			<tr class="warning">
				<th>type</th>
				<th>somme</th>
				<th class="active">Date</th>
			</tr>
			<?php foreach ( $result as $reponse):  //il s'agit simplement une balise ouvrante de foreach?>
				<tr class="info">
					<td class="active"><?= $reponse['type_op']?></td>
					<td class="active"><?= $reponse['somme_op']?></td>
					<td class="active"><?= $reponse['date_op']?></td>
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
