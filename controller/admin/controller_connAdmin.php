<?php 
	include('modele/admin/classe_admin.php');
	
	if(isset($_POST['connecter']))
	    {
	
	       $email_admin = htmlentities(trim($_POST['email_admin']));
		   $motdePass_admin = htmlentities(trim($_POST['motdePass_admin']));
		   
		   $Cree_connexion = new Administrateur(NULL,NULL,NULL);
		   
		   $reponse = $Cree_connexion->connectAdmin($email_admin,$motdePass_admin);
		   
		
			  if ($reponse){
			  $_SESSION['email_admin']  =  $reponse->email_admin;
				 header('location:?c=corps');
					// echo 'connexion reussie';
					 
				 }

			 else{
			 header('location:?c=cnxad');
			 echo 'connexion echouer';
				
			  } 
			  
		}
			 include('view/admin/view_adminConnx.php');
?>
	