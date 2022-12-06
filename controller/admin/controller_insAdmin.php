<?php 
	include('modele/admin/classe_admin.php');
	
	if(isset($_POST['connecter']))
	    {
	
	       $email_admin = htmlentities(trim($_POST['email_admin']));
		   $motdePass_admin = htmlentities(trim($_POST['motdePass_admin']));
		   
		   $Cree_connexion = new Administrateur(NULL,$email_admin,$motdePass_admin);
			 
		    $reponse = $Cree_connexion->ajoutAdmin();
			
		  
		
			 if ($reponse){
				header('location:?c=cnxad');
					// echo 'connexion reussie';
					 
				 }

			 else{
			header('location:?c=adins');
			 // echo 'inscription echouer';
				
			  } 
			  
		}
			 include('view/admin/view_admin_ins.php');
?>
	