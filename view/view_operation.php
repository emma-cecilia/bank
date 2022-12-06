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
       background: url(img/zz.jpg) no-repeat center;
	   background-size: cover;
     }
     .container{
       margin-top: 100px;
       width: 800px;
     }

     </style>
  </head>

  <body>
  <?php include('view/menu/menu_client.php'); ?>
  
    <div class="container">
 <div class="well">
  <div class="row">
  <div class="col-md-offset-0 col-md-12">
    <h1 style="text-align:center;color:blue">OPERATION</h1>
    </div>
  </div>

  <form method="POST" action="" enctype="multipart/form-data">

<div class="form-group">
      <label for="examplePrenom">Type</label>
      <select class="form-control" name="type_op">
		<option value="depot">depot</option>
		<option value="retrait">retrait</option>
	  </select>
    </div>
   
    <div class="form-group">
      <label for="examplePrenom">Somme</label>
      <input type="text" class="form-control" id="examplePrenom" placeholder="somme de l'opération" name="somme_op" required/>
    </div>

    <div class="form-group">
      <label for="examplePrenom">date de l'operation</label>
      <input type="date" class="form-control" id="examplePrenom" placeholder="date" name="date_op" required/>
    </div>

	<div class="form-group">
      <label for="examplePrenom"></label>
      <input type="hidden" class="form-control" id="examplePrenom" name="id_comp" placeholder="date" value="<?=$_SESSION['id_comp']?>" />
    </div>
	
    <div style="float:left;margin-left:20%">
      <button type="submit" class="btn btn-primary" name="enregistrer">Valider</button>
    </div>

    <div style="float:right;margin-right:20%">
      <button type="reset" class="btn btn-danger" name="annuler">Annuler</button>
    </div><br><br><br>
   </form>


    </div>
</div>

  </body>
</html>
