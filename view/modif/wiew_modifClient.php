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
       background-image: url(img/srv.jpg);
     }
     .container{
       margin-top: 100px;
       width: 800px;
     }
	 .well{
	 width: 850px;
	 }

     </style>
  </head>

  <body>
  <?php include('view/menu/menu_admin.php'); ?>
   
    <div class="container">
 <div class="well">
  <div class="row">
  <div class="col-md-offset-0 col-md-12">
    <h1 style="text-align:center;color:blue">MODIFIER CLIENT</h1>
    </div>
  </div>

  <form method="POST" action="" enctype="multipart/form-data">
	<input type="hidden" placeholder="" name="numContact" value ="<?=$afficher['id_cl'];?>" />
	<div class="form-group">
      <label for="examplePrenom"></label>
      <input type="text" class="form-control" id="example" placeholder="ex:AZZ20" name="numero_matricule_cl" value ="<?=$afficher['numero_matricule_cl'];?>"/>
    </div>

    <div class="form-group">
      <label for="exampleNom"></label>
      <input type="text" class="form-control" id="exampNom" placeholder="Nom" name="nom_cl" value ="<?=$afficher['nom_cl'];?>" />
    </div>

    <div class="form-group">
      <label for="examplePrenom"></label>
      <input type="text" class="form-control" id="examplePrenom" placeholder="prenom" name="prenom_cl" value ="<?=$afficher['prenom_cl'];?>" />
    </div>

    <div class="form-group">
      <label for="examplePrenom"></label>
      <input type="date" class="form-control" id="exampleDate" placeholder="aaaa/mm/jj" name="date_naissance_cl" value ="<?=$afficher['date_naissance_cl'];?>" />
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1"></label>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email_cl" value ="<?=$afficher['email_cl'];?>"/>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1"></label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="motdePass_cl" value ="<?=$afficher['motdePass_cl'];?>"/>
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