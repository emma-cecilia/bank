<?php
include('modele/classe_client.php');

		$effacer = new client_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
		
		
	if(isset($_GET['numContact'])){
		$reponse = $effacer->supprimer($_GET['numContact']);

		if($reponse){
			 header('location:?c=lsc');
		}
	}
		
?>