<?php 
		include('modele/classe_modifEmploye.php');
	
	$modif = new employe_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
	
	$afficher = $modif->recupInfos();
	
	if(isset($_POST['enregistrer']))
	{
		$numero_matricule_emp		= htmlentities(trim($_POST['numero_matricule_emp']));
		$nom_emp		= htmlentities(trim($_POST['nom_emp']));
		$prenom_emp		= htmlentities(trim($_POST['prenom_emp']));
		$date_naissance_emp			= htmlentities(trim($_POST['date_naissance_emp']));
		$email_emp			= htmlentities(trim($_POST['email_emp']));
		$motdePass_emp			= htmlentities(trim($_POST['motdePass_emp']));
		
		$modifier = $modif->modifierEployer();
		
		if($modifier){
			header('location:?c=lstem');
		}
	}
	
	include('view/modif/view_modifEmploye.php');	
?>