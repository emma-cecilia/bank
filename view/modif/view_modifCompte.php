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
       background-image: url(img/wd.jpg);
     }
     .container{
       margin-top: 100px;
       width: 800px;
     }

     </style>
  </head>

  <body>
  <?php include('view/menu/menu_admin.php'); ?>
   
    <div class="container">
 <div class="well">
  <div class="row">
  <div class="col-md-offset-0 col-md-12">
    <h1 style="text-align:center;color:blue">COMPTE</h1>
    </div>
  </div>

  <form method="POST" action="" enctype="multipart/form-data">

  <input type="hidden" placeholder="" name="numContact" value ="<?=$afficher['id_comp'];?>" />
	

    <div class="form-group">
      <label for="exampleNom">Numero du compte</label>
      <input type="text" class="form-control" id="exampNom" placeholder="Numero du compte" name="numero_comp" value ="<?=$afficher['numero_comp'];?>"/>
    </div>

    <div class="form-group">
      <label for="examplePrenom">Solde</label>
      <input type="text" class="form-control" id="examplePrenom" placeholder="Solde" name="solde_comp" value ="<?=$afficher['solde_comp'];?>" readonly="readonly"/>
    </div>
	
	 <div class="form-group">
      <label for="examplePrenom">Type</label>
      <select class="form-control" name="type_comp" value ="<?=$afficher['type_comp'];?>" >
		<option >Courant</option>
		<option >Epargne</option>
	  </select>
    </div>

    <div class="form-group">
      <label for="examplePrenom">date de creation</label>
      <input type="date" class="form-control" id="examplePrenom" placeholder="date" name="date_creation_comp" value ="<?=$afficher['date_creation_comp'];?>" readonly="readonly"/>
    </div>

    <div style="float:left;margin-left:20%">
      <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
    </div>

    <div style="float:right;margin-right:20%">
      <button type="reset" class="btn btn-danger" name="annuler">Annuler</button>
    </div><br><br><br>
   </form>


    </div>
</div>

  </body>
</html>
