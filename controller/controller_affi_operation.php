<?php
include('modele/classe_operation.php');
		
		$Cree_connexion = new Operation(NULL,NULL,NULL,NULL,NULL);
			 
		  $result=$Cree_connexion->affichOpe();
		  
		

		include('view/view_listOperation.php');		
?>