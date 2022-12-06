<?php
include('modele/classe_client.php');

	if(isset($_POST['enregistrer']))
	{
		$numero_matricule_cl		= htmlentities(trim($_POST['numero_matricule_cl']));
		$nom_cl		= htmlentities(trim($_POST['nom_cl']));
		$prenom_cl		= htmlentities(trim($_POST['prenom_cl']));
		$date_naissance_cl			= htmlentities(trim($_POST['date_naissance_cl']));
		$email_cl			= htmlentities(trim($_POST['email_cl']));
		$motdePass_cl			= htmlentities(trim($_POST['motdePass_cl']));
		
		$Cree_connexion = new client_creerCompte(NULL,$numero_matricule_cl,$nom_cl,$prenom_cl,$date_naissance_cl,$email_cl,$motdePass_cl);
			
			
			
		  $reponse = $Cree_connexion->addAjout_Client();
			
		 if($reponse){
				 header('location:?c=ajtc');
			
			 }else
				 {
				 header('location:?c=adc');
				 }
		 }
		
	include('view/view_ajoutClient.php');		
?>