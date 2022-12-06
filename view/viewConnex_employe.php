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
       background-image: url(img/wwq.jpg);
     }
     .we{
	 position: absolute;
	 top: 200px;
	 left: 300px;
	 width: 700px;
	 }

     </style>
  </head>

  <body>
  
    <div class="container">
	<h1><a href="?c="><img src="img/ba.png"/></a></h1>
	<div class="we">
  <div class="row">
  <div class="col-md-offset-0 col-md-12">
    <h1 style="text-align:center;color:red">CONNEXION EMPLOYE</h1>
    </div>
  </div><br>

  <form method="POST" action="" class="form" enctype="multipart/form-data" >

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">@</span>
      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email_emp" required/>
    </div><br><br>

    <div class="input-group">
	  <span class="input-group-addon glyphicon glyphicon-lock"></span>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="motdePass_emp" required/>
    </div><br>

    <div style="float:left;margin-left:20%">
      <button type="submit" class="btn btn-primary" name="enregistrer">Enregistrer</button>
    </div>

    <div style="float:right;margin-right:20%">
      <button type="reset" class="btn btn-danger" name="annuler">Annuler</button>
    </div><br><br><br>
   </form>


    </div>
</div>

  </body>
</html>
