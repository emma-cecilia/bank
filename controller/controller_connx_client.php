<?php 
	include('modele/classe_client.php');
	
	
	if(isset($_POST['enregistrer']))
	    {
	
	       $email_cl = htmlentities(trim($_POST['email_cl']));
		   $motdePass_cl = htmlentities(trim($_POST['motdePass_cl']));
		   
		$Cree_connexion = new client_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
			
		   $reponse = $Cree_connexion->connecteClients($email_cl,$motdePass_cl);
		   
		    
		
	if ($reponse){
			 $_SESSION['id_cl']  =  $reponse->id_cl;
			$_SESSION['nom_cl']  =  $reponse->nom_cl;
			$_SESSION['numero_matricule_cl'] =  $reponse->numero_matricule_cl;
			$_SESSION['prenom_cl']  =  $reponse->prenom_cl;
			$_SESSION['date_naissance_cl']  =  $reponse->date_naissance_cl;
			$_SESSION['email_cl']  =  $reponse->email_cl;
			$_SESSION['numero_comp']  =  $reponse->numero_comp;
			$_SESSION['solde_comp']  =  $reponse->solde_comp;
			$_SESSION['type_comp']  =  $reponse->type_comp;
			$_SESSION['date_creation_comp']  =  $reponse->date_creation_comp;
			$_SESSION['id_comp']  =  $reponse->id_comp;
// var_dump($reponse);
			header('location:?c=espc');
					 // echo 'connexion reussie';					 
				  }

			  else{
			  // header('location:?c=emcx');
				 echo "<script>alert('connexion echouer');</script>";
			   } 
			  
		}
			 include('view/viewConnex_clients.php');
?>
	