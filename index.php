<?php
 session_start();

//index.php : va centraliser toutes les pages
if(isset($_GET['c'])){
	$ctrl = $_GET['c'];
}
else{
	$ctrl = NULL;
}

switch($ctrl){
//Partie traitant le coté client
//Connexion client
		case 'emcx': 
		include('controller/controller_connx_client.php');
		break;
		
//deConnexion client
		case 'dcxe': 
		include('controller/controller_deconnexion_c.php');
		break;
		
//espace client
	case 'espc'://affiche 
		include('controller/controller_espace_client.php');
		break;
		
	case 'ope'://affiche 
		include('controller/Controller_operation.php');
		break;
		
		case 'opcl'://affiche liste operation
		include('controller/controller_affi_opClient.php');
		break;
		
		case 'efop'://affiche 
		include('controller/controller_effet_op.php');
		break;
		
		case 'iftc'://affiche 
		include('controller/controller_infotClient.php');
		break;
		
	case 'mnc'://menu client
		include('controller/menu/controller_menuClient.php');
		break;
//=========================================fin=======================
//Partie traitant le coté employer

	//connexion de l employer
	case 'cnxem'://
		include('controller/controller_connx_employe.php');
		break;
		
		//deconnexion de l employer
	case 'dcnem'://
		include('controller/controller_deconnexion_e.php');
		break;
		
	//ajout client par l employer
	case 'adc'://affiche la page ajout client
		include('controller/controller_ajoutClient.php');
		break;
		
		//effet client qui a ete ajouter
	case 'efjtc'://affiche la page 
		include('controller/controller_effet_ajoutClient.php');
		break;
		
	//ajout compte
	case 'ajtc'://affiche la page ajout compte client
		include('controller/controller_compte.php');
		break;
		
	case 'mne':// menu employe
		include('controller/menu/controller_menuEmploye.php');
		break;
		
		case 'espem':// espace employe
		include('controller/controller_espace_employe.php');
		break;
		
		case 'infem':// infots employe
		include('controller/controller_infotEmploye.php');
		break;
		
		//Partie traitant l'affichage de tout
		// liste client
		// case 'lstc':
		// include('controller/controller_listClient.php');
		// break;
		
		// affiche compte
		// case 'afcp':
		// include('controller/controller_affiche_compte.php');
		// break;
	
//=========================================fin=======================
//Partie traitant le coté administrateur
//création du compte admin

//inscription de l'administrateur
	case 'adins'://affiche la page des contacts
		include('controller/admin/controller_insAdmin.php');
		break;

//connexion de l'administrateur
	case 'cnxad'://affiche la page des contacts
		include('controller/admin/controller_connAdmin.php');
		break;
		
//deconnexion de l'administrateur
	case 'decnad'://affiche la page des contacts
		include('controller/admin/controller_deconnexion.php');
		break;
	
	//suprimer employe
	case 'supr'://affiche la page des contacts
		include('controller/suprimer/controller_suppEmploye.php');
		break;
		
		//suprimer compte
	case 'supct':
		include('controller/suprimer/controller_suppCompte.php');
		break;
		
	////suprimer client
	case 'suppcl':
		include('controller/suprimer/controller_suppClient.php');
		break;
		
		////suprimer Operation
	case 'supop':
		include('controller/suprimer/controller_suppOperation.php');
		break;
	
	//modifier client
	case 'modfc'://affiche la page des contacts
		include('controller/modifier/controller_modifClient.php');
		break;
	
	//modifier compte
	case 'modcm'://affiche la page des contacts
		include('controller/modifier/controller_modifCompte.php');
		break;
	
	//modifier employe
	case 'modif'://affiche la page des contacts
		include('controller/modifier/controller_modifEmploye.php');
		break;
		
		//ajout employer  
	case 'ajepl':
		include('controller/admin/controller_ajoutEmploye.php');
	break;

//Partie traitant l'affichage de tout
//page affiche liste client
	case 'lsc':
		include('controller/admin/controller_listClientAdmin.php');
		break;

//affichage des  liste employe du site
	case 'lstem':
		include('controller/admin/controller_listEmployeAdmin.php');
		break;
	
		
		//affiche compte client
	case 'affcl'://
		include('controller/admin/controller_affiche_compte.php');
		break;
		
		case 'affop'://affiche operation
		include('controller/admin/controller_affi_operation.php');
		break;
	
	//page admin 
	case 'corps'://affiche la page accueille admin
		include('controller/admin/controller_corpsAdmin.php');
		break;
	
	//menu admin 
	case 'mna':
		include('controller/menu/controller_menuAdmin.php');
	break;
//deconnexion de l'administrateur
	
//include 'controller/controller_accueil.php';
//=========================================================================		
	default:
	include('controller/controller_accueil.php');
		
		break;
}
?>