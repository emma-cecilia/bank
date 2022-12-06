<?php
include('modele/classe_operation.php');
		
		$Cree_connexion = new Operation(NULL,NULL,NULL,NULL,NULL);
			 
		  $result=$Cree_connexion->affiche();


		include('view/admin/view_affi_operation.php');		
?>