<?php
include('modele/classe_operation.php');

		$effacer = new Operation(NULL,NULL,NULL,NULL,NULL);
		
		
	if(isset($_GET['numContact'])){
		$reponse = $effacer->supprimer($_GET['numContact']);

		if($reponse){

			 header('location:?c=affop');
		}
	}
		
		
	
	
?>