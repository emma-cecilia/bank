<?php 
	class Compte_creerCompte
	{
		private $id_comp;
		private $numero_comp;
		private $solde_comp;					 
		private $type_comp;
		private $date_creation_comp;
		private $id_emp;
		private $clients_id_cl;

		public function __construct($id_comp, $numero_comp, $solde_comp,$type_comp,$date_creation_comp,$id_emp,$clients_id_cl)
					{
						$this->id_comp 		= $id_comp;
						$this->numero_comp 	= $numero_comp;
						$this->solde_comp 		= $solde_comp ;
						$this->type_comp 	= $type_comp;
						$this->date_creation_comp = $date_creation_comp;
						$this->id_emp = $id_emp;
						$this->clients_id_cl = $clients_id_cl;
					}
		
		/*LISTE DES GETTERS*/
		
		public function getId_comp()
		{
			return $this->id_comp;
		}
		public function getNumero_comp()
		{
			return $this->numero_comp;
		}
		
		public function getSolde_comp()
		{
			return $this->solde_comp;
		}		
		
		public function getType_comp()
		{
			return $this->type_comp;
		}
		public function getDate_creation_comp()
		{
			return $this->date_creation_comp;
		}	
			
		public function getId_emp()
		{
			return $this->id_emp;
		}	
		
		public function getClients_id_cl()
		{
			return $this->clients_id_cl;
		}	
		
		
		/*LISTE DES SETTERS*/
		
		public function setId_comp($id_comp)
		{
			$this->id_comp = $id_comp;
		}
		
		public function setNumero_comp($numero_comp)
		{
			$this->numero_comp = $numero_comp;
		}
		public function setSolde_comp($solde_comp)
		{
			$this->solde_comp = $solde_comp;
		}		
		
		public function setType_comp($type_comp)
		{
			$this->type_comp = $type_comp;
		}
		public function setDate_creation_comp($date_creation_comp)
		{
			$this->date_creation_comp = $date_creation_comp;      
		}	
			
		public function setId_emp($id_emp)
		{
			$this->id_emp = $id_emp;      
		}	
		
		public function setClients_id_cl($clients_id_cl)
		{
			$this->clients_id_cl = $clients_id_cl;      
		}	
		
		
		/*Connexion � la base de Donn�es*/
		public function connexionBdd()
		{			
			try{
				///$bdd = new PDO('mysql:host=localhost;dbname=ub_banque;charset=utf8', 'root', 'password');
				$bdd = new PDO('mysql:host=localhost;dbname=ub_banque;charset=utf8', 'root', '');
				 return $bdd;
			}catch(Exception $e){
				die('Erreur : ' . $e->getMessage());
			}
		}
			

				public function addAjout_compte()
		{
			$bdd = $this->connexionBdd();
					
			//chemin pour id postlant
			$request = $bdd->prepare("SELECT id_emp FROM employes ORDER BY id_emp DESC");
			
			$result = $request->execute();
			
			$result=$request->fetchAll();
			
			//Affectation de l'creer_compte_id_creercompte dans l'id de etrang�re  
			$emp = $result[0]['id_emp'];
			
			//chemin pour id postlant
			$request = $bdd->prepare("SELECT id_cl FROM clients ORDER BY id_cl DESC");
			
			$result = $request->execute();
			
			$result=$request->fetchAll();
			
			$id_cl = $result[0]['id_cl'];
/*--------------------------------------------------------------------------*/
			$request = $bdd->prepare("INSERT INTO comptes (id_comp, numero_comp, solde_comp, type_comp, date_creation_comp, id_emp,clients_id_cl)
                                                   VALUES (NULL,?,?,?,?,?,?)");
			
			$reponse = $request->execute(array(	
												$_POST['numero_comp'],
												$_POST['solde_comp'],
												$_POST['type_comp'],
												$_POST['date_creation_comp'],
						
											
												
												//r�cup�ration de l'id principal
										    	$emp,
										    	$id_cl
										    	
											));
			
			return $reponse;
			
				/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXIO A LA BASE DE DONNEES*/
			unset($bdd);
		}
				
		/*METHODE QUI AJOUTE UN COMPTE CLIENTS*/
		// public function ajoutClient(){
			
			// $bdd = $this->connexionBdd();
			
			// requ�te pour �viter la redendance des noms
			// $request = $bdd->prepare("SELECT * FROM comptes WHERE  = :numero_comp");
			// $result = $request->execute(array(':numero_comp'=>$this->numero_comp));
			
			// $result=$request->fetchobject();
									
			// v�rification pour s'avoir si l'objet existe
			// if(!is_object($result)){
									
				// $request = $bdd->prepare("INSERT INTO creer_site
										        // (id_comp, numero_comp, solde_comp,
												// type_comp,date_creation_comp) 
										 
										// VALUES(:id_comp,:numero_comp,:solde_comp,
											 // :type_comp,:date_creation_comp)");
				
				// $reponse = $request->execute(array(
													// 'id_comp'	=>$this->id_comp,
													// 'numero_comp' =>$this->numero_comp,													
													// 'solde_comp'	=>$this->solde_comp,
													// 'type_comp'=>$this->type_comp,
													// 'date_creation_comp'$this->date_creation_comp,
												// ));	
					 
				// return $reponse;
					
			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			// unset($bdd);
				// }
		// }
		
		//=====================================================================================
		
		// METHODE QUI PERMET AUX CLIENTS D'ETRE CONNECTE A LA BASE DE DONNEE
		// public function connecteClient($email_emp,$motdePass_emp){

		// $bdd = $this->connexionBdd();  

			// $request = $bdd->prepare("SELECT * FROM  WHERE email_emp=? AND motdePass_emp=?");

		// $request->execute(array($_POST['email_emp'],$_POST['motdePass_emp']));

			 // $reponse = $request->fetch();

			 // return $reponse;

			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXIO A LA BASE DE DONNEES*/
			// unset($bdd);
	
		// }
		
					//METHODE POUR AFFICHER LES ENREGISTREMENTS DANS INPUT DU FORMULAIRE
		public function recupInfos(){
			
			$bdd = $this->connexionBdd();
			
			$request = $bdd->prepare("SELECT * FROM comptes WHERE id_comp=:num");

			$request->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);
			
			$result = $request->execute();
			
			$contact=$request->fetch();
			
			return $contact;
		}
		//MODIFICATION DES DONNER
			public function modifierCompte(){  
	
			$bdd = $this->connexionBdd();
												
			$request = $bdd->prepare("UPDATE comptes SET numero_comp=:numero_comp,
									solde_comp=:solde_comp,type_comp=:type_comp,date_creation_comp=:date_creation_comp
									 WHERE id_comp=:num LIMIT 1");

			$request->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
			$request->bindValue(':numero_comp', $_POST['numero_comp'], PDO::PARAM_STR);
			$request->bindValue(':solde_comp', $_POST['solde_comp'], PDO::PARAM_INT);
			$request->bindValue(':type_comp', $_POST['type_comp'], PDO::PARAM_STR);
			$request->bindValue(':date_creation_comp', $_POST['date_creation_comp'], PDO::PARAM_STR);
		   
			$result = $request->execute();
			
			return $result;
	}
		// methode qui permet d'afficher  le contenu bdd
		
		 public function affiche(){
	
				  $bdd = $this->connexionBdd();
				  $request = $bdd->prepare("SELECT * FROM comptes ");
				  
				  $result=$request->execute();
				  
				  $contact=$request->fetchAll();
				 
				return $contact ;

			}
			
		
		
		// METHODE POUR SUPPRIMER UN ENREGISTREMENT
		public function supprimer($numContact){
			
			$bdd = $this->connexionBdd();
			
			$request = $bdd->prepare("DELETE FROM comptes WHERE id_comp=:num LIMIT 1");
			
			$request->bindValue(':num', $numContact, PDO::PARAM_INT);
			
			$result = $request->execute();
			
			return $result;
		}
	}
	
?>