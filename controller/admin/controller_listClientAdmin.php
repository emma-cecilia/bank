<?php  include('modele/classe_client.php');

$Cree_connexion = new client_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

		$result=$Cree_connexion->affiche();
		
		include('view/admin/view_listClient.php');
?>