<?php
include('modele/classe_operation.php');

	if(isset($_POST['enregistrer']))
	{
		$type_op		= htmlentities(trim($_POST['type_op']));
		$somme_op		= htmlentities(trim($_POST['somme_op']));
		$date_op		= htmlentities(trim($_POST['date_op']));
		$id_comp		= htmlentities(trim($_POST['id_comp']));
	

		if($type_op=='retrait'){
			if($_SESSION['solde_comp'] < $somme_op){
				echo'<script>alert("Vous ne pouvez effectuer cette opération car votre solde ne vous le permet pas.");</script>';
			}
			else{
				
			require_once('modele/classe_compte.php');
						
				$oper = new Compte_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
				
				$final = $oper->retrait();
			
					if($final){
						
						echo'<script>alert("Retrait réuussi. Vous venez de retirer '.$somme_op.' francs de votre compte");</script>.<script>document.location.replace("?c=emcx")</script>';
					}
					else{
						echo'<script>alert("Le retrait a échouer.");</script>';
					}
			}
		
		
		}
		
		elseif($type_op=='depot'){
		
			require_once('modele/classe_compte.php');
				
				$operation = new Compte_creerCompte(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
			
				$result = $operation->depot();
		
					if($result){
						
						echo'<script>alert("Dépot réussi. Vous venez d\'effectuer un dépot de '.$somme_op.' francs");</script>.<script>document.location.replace("?c=emcx")</script>';
					}
					else{
						echo'<script>alert("Le dépot a échouer.");</script>';
					}
			
		}
		
		else{
			echo'<script>alert("Echec de la procedure de l\'operation de depot ou retrait.");</script>';
		}


	
		//========================================================================
		/************ METHODE POUR ENREGISTRER UNE OPERATION *********************/
		
			if($type_op=='retrait' && $_SESSION['solde_comp'] < $somme_op){
			
				echo'<script>alert("Echec de l\'enregistrement de l\'opération");</script>';
			}
		
		
			elseif($type_op=='depot'){
		
				$Cree_connexion = new Operation(NULL,$type_op,$somme_op,$date_op,$id_comp);	
					 
				   $reponse= $Cree_connexion->ajoutOper();
					
				  if($reponse){
						 echo "<script>alert('opération réussie');</script>.<script>document.location.replace('?c=emcx');</script>";
						}
						else
						 {
						echo 'aucune transaction n\'a été effectuée';
						 }
			}
			
			else{
				$Cree_connexion = new Operation(NULL,$type_op,$somme_op,$date_op,$id_comp);	
					 
				   $reponse= $Cree_connexion->ajoutOper();
					
					if($reponse){
						 echo "<script>alert('opération réussie');</script>.<script>document.location.replace('?c=emcx');</script>";
						}
						else
						 {
						echo 'aucune transaction n\'a été effectuée';
						 }
			
			
			
			
			
			
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
	}
		
	include('view/view_operation.php');		
?>