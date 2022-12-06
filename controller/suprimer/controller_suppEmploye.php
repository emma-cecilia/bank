<?php
include('modele/classe_employe.php');

		$effacer = new employe_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		
		
	if(isset($_GET['numContact'])){
		$reponse = $effacer->supprimer($_GET['numContact']);

		if($reponse){

			 header('location:?c=lstem');
		}
	}
		
		
	
	
?>