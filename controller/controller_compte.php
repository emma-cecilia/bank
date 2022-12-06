<?php	include('modele/classe_compte.php');

	if(isset($_POST['enregistrer']))
	{
		$numero_comp		= htmlentities(trim($_POST['numero_comp']));
		$solde_comp		    = htmlentities(trim($_POST['solde_comp']));
		$type_comp					= htmlentities(trim($_POST['type_comp']));
		$date_creation_comp			= htmlentities(trim($_POST['date_creation_comp']));

		
		$reponse = new Compte_creerCompte(NULL,$numero_comp,$solde_comp,$type_comp,$date_creation_comp,NULL,NULL);
			
			
		$maf= $reponse->addAjout_compte();
		
		
		  if($maf)
				{
					
					echo'<script>alert("Ajout du compte réussi");</script>.<script>document.location.replace("?c=espem")</script>';
				}
				else
					{
					echo '<script>alert("Numéro de compte déjà utilisé, ou vérifiez/modifiez vos informations !");</script>';
					}
		}
	include('view/view_compte.php');		
?>