<?php  include('modele/classe_compte.php');

$Cree_connexion = new Compte_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL);

		$result=$Cree_connexion->affiche();
		
		include('view/view_affiche_compte.php');
?>