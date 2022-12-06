<?php  include('modele/classe_employe.php');

$Cree_connexion = new employe_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

		$result=$Cree_connexion->affiche();
		
		include('view/view_listEmploye.php');

?>