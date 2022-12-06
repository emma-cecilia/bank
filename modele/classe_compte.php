<?php 
	class Compte_creerCompte
	{
		private $id_comp;
		private $numero_comp;
		private $solde_comp;					 
		private $type_comp;
		private $date_creation_comp;
		private $id_emp;
		private $id_cl;

		public function __construct($id_comp, $numero_comp, $solde_comp,$type_comp,$date_creation_comp,$id_emp,$id_cl)
					{
						$this->id_comp 		= $id_comp;
						$this->numero_comp 	= $numero_comp;
						$this->solde_comp 		= $solde_comp ;
						$this->type_comp 	= $type_comp;
						$this->date_creation_comp = $date_creation_comp;
						$this->id_emp = $id_emp;
						$this->id_cl = $id_cl;
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
		
		public function getId_cl()
		{
			return $this->id_cl;
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
		
		public function setId_cl($id_cl)
		{
			$this->id_cl = id_cl;      
		}	
		
		
		/*Connexion à la base de Données*/
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
			
			//Affectation de l'creer_compte_id_creercompte dans l'id de etrangère  
			$emp = $result[0]['id_emp'];
			
			//chemin pour id postlant
			$request = $bdd->prepare("SELECT id_cl FROM clients ORDER BY id_cl DESC");
			
			$result = $request->execute();
			
			$result=$request->fetchAll();
			
			$id_cl = $result[0]['id_cl'];
/*--------------------------------------------------------------------------*/
			$request = $bdd->prepare("INSERT INTO comptes (id_comp, numero_comp, solde_comp, type_comp, date_creation_comp, id_emp,id_cl)
                                                   VALUES (NULL,?,?,?,?,?,?)");
			
			$reponse = $request->execute(array(	
												$_POST['numero_comp'],
												$_POST['solde_comp'],
												$_POST['type_comp'],
												$_POST['date_creation_comp'],

												//récupération de l'id principal
										    	$emp,
										    	$id_cl
											));
			
			return $reponse;
			
		/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXIO A LA BASE DE DONNEES*/
			unset($bdd);
		}
	
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
		
		//========================================================================
		/***  METHODE QUI PERMET D'EFFECTUER UN RETRAIT DEPUIS LA BDD***/
		
			public function retrait(){
				
				$bdd = $this->connexionBdd();
				
				$retrait	= htmlentities(trim($_POST['somme_op']));
				$id_comp	= htmlentities(trim($_POST['id_comp']));
				
				$request = $bdd->prepare("UPDATE comptes SET solde_comp = solde_comp-$retrait WHERE id_comp = $id_comp ");
								
				$result = $request->execute();
								
				return $result;
			}

		//========================================================================
		/***  METHODE QUI PERMET D'EFFECTUER UN DEPOT DEPUIS LA BDD***/
			
			public function depot(){
				
				$bdd = $this->connexionBdd();
				
				$depot	    = htmlentities(trim($_POST['somme_op']));
				$id_comp	= htmlentities(trim($_POST['id_comp']));

				$request = $bdd->prepare("UPDATE comptes SET solde_comp = solde_comp+$depot WHERE id_comp = $id_comp ");
				
				$result = $request->execute();
								
				return $result;
			}	
	}
	
?>