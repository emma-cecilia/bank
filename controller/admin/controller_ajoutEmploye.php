<?php
include('modele/classe_employe.php');

	if(isset($_POST['enregistrer']))
	{
		$numero_matricule_emp		= htmlentities(trim($_POST['numero_matricule_emp']));
		$nom_emp		= htmlentities(trim($_POST['nom_emp']));
		$prenom_emp		= htmlentities(trim($_POST['prenom_emp']));
		$date_naissance_emp			= htmlentities(trim($_POST['date_naissance_emp']));
		$email_emp			= htmlentities(trim($_POST['email_emp']));
		$motdePass_emp			= htmlentities(trim($_POST['motdePass_emp']));
		
		$reponse = new employe_creerCompte(NULL,$numero_matricule_emp,$nom_emp,$prenom_emp,$date_naissance_emp,$email_emp,$motdePass_emp,NULL);
			
		 $maf= $reponse->addAjout_employe();
		
		 if($reponse){
				 header('location:?c=lstem');
			
			 }else
				 {
				
				 header("Location:c=ajepl");
				 }
		 }
		
	include('view/view_ajout_employe.php');		
?>