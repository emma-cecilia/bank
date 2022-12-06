<?php  include('modele/classe_modifCompte.php');
//ttt de la premiere  methode

$modif = new Compte_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL);

$afficher = $modif->recupInfos();

if(isset($_POST['submit'])){

		$numero_comp		= htmlentities(trim($_POST['numero_comp']));
		$solde_comp		    = htmlentities(trim($_POST['solde_comp']));
		$type_comp		    = htmlentities(trim($_POST['type_comp']));
		$date_creation_comp			= htmlentities(trim($_POST['date_creation_comp']));
		
		$modifier = $modif->modifierCompte();
		
		 if($modifier){
			header('location:?c=affcl');
		}
		else{
		echo 'non';
		}



}


include('view/modif/view_modifCompte.php');	