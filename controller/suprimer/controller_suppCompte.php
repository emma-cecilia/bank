<?php
include('modele/classe_compte.php');

		$effacer = new Compte_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		
		
	if(isset($_GET['numContact'])){
		$reponse = $effacer->supprimer($_GET['numContact']);

		if($reponse){

			 header('location:?c=affcl');
		}
	}

?>