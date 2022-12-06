<?php 
	include('modele/classe_employe.php');
	
	
	if(isset($_POST['enregistrer']))
	    {
	
	       $email_emp = htmlentities(trim($_POST['email_emp']));
		   $motdePass_emp = htmlentities(trim($_POST['motdePass_emp']));
		   
		  $Cree_connexion = new employe_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
			
			
		  $reponse = $Cree_connexion->connecteEmploye($email_emp,$motdePass_emp);
		
			   if ($reponse){
			   
			   $_SESSION['nom_emp'] = $reponse->nom_emp;
			   $_SESSION['prenom_emp'] = $reponse->prenom_emp;
			   $_SESSION['date_naissance_emp'] = $reponse->date_naissance_emp;
			   $_SESSION['email_emp'] = $reponse->email_emp;
			   $_SESSION['numero_matricule_emp'] = $reponse->numero_matricule_emp;
			   
			  
				   header('location:?c=espem');
					 // echo 'connexion reussie';					 
				   }

			   else{
			  // header('location:?c=emcx');
				 echo "<script>alert('connexion echouer');</script>";
			    } 
			  
		}
			 include('view/viewConnex_employe.php');
?>
	