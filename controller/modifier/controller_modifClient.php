<?php  include('modele/classe_modifClient.php');
//ttt de la premiere  methode

$modif = new  client_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
$afficher = $modif->recupInfos();

if(isset($_POST['submit'])){
		
		 $numero_matricule_cl = $_POST['numero_matricule_cl'];
		 $nom_cl = $_POST['nom_cl'];
		$prenom_cl = $_POST['prenom_cl'];
		 $date_naissance_cl = $_POST['date_naissance_cl'];
		 $email_cl = $_POST['email_cl'];
		 $motdePass_cl = $_POST['motdePass_cl'];

		
		 $modifier = $modif->modifierClient();
		
		
		 if($modifier){
			header('location:?c=lsc');
		}
		else{
		echo 'non';
		}
		
}	
		
	
include('view/modif/wiew_modifClient.php');	
?>