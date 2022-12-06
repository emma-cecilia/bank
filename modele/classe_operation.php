<?php 
	class Operation
	{
		private $id_op;
		private $type_op;
		private $somme_op;
		private $date_op;					 
		private $id_comp;
		
		public function __construct($id_op,$type_op,$somme_op,$date_op,$id_comp)
					{
						$this->id_op 		= $id_op;
						$this->type_op 		= $type_op;
						$this->somme_op 	= $somme_op;
						$this->date_op 		= $date_op ;
						$this->id_comp   	= $id_comp;
					}
		
		/*LISTE DES GETTERS*/
		
		public function getId_op()
		{
			return $this->id_op;
		}
		public function getType_op()
		{
			return $this->type_op;
		}
		
		public function getSomme_op()  
		{
			return $this->somme_op;
		}		
		
		public function getDate_op()
		{
			return $this->date_op;
		}
		
		public function getid_comp()
		{
			return $this->id_comp;
		}
		
		
		/*LISTE DES SETTERS*/
		
		public function setId_op($id_op)
		{
			$this->id_op = $id_op;
		}
		
		public function setType_op($type_op)
		{
			$this->type_op = $type_op;
		}
		
		public function setSomme_op($somme_op)
		{
			$this->somme_op = $somme_op;
		}
		public function setDate_op($date_op)
		{
			$this->date_op = $date_op;
		}
		
		public function setId_comp($id_comp)
		{
			$this->id_comp = $id_comp;
		}
		
		
		/*Connexion à la base de Données*/
		public function connexionBdd()
		{			
			try{
				//$bdd = new PDO('mysql:host=localhost;dbname=ub_banque;charset=utf8', 'root', 'password');
				$bdd = new PDO('mysql:host=localhost;dbname=ub_banque;charset=utf8', 'root', '');
				 return $bdd;
			}catch(Exception $e){

				die('Erreur : ' . $e->getMessage());
			}
		}
		
		
		public function addAjout_Operation()
		{
			$bdd = $this->connexionBdd();
					
			//chemin pour id postlant
			$request = $bdd->prepare("SELECT `id_comp`FROM `comptes`ORDER BY `id_comp` DESC") ;
			
			$result = $request->execute();
			
			$result=$request->fetchAll();
			
			//Affectation de l'creer_compte_id_creercompte dans l'id de etrangère  
			$id_compE = $result[0]['id_comp'];
/*--------------------------------------------------------------------------*/
			$request = $bdd->prepare("INSERT INTO `operations`(`id_op`,`type_op`,`somme_op`, `date_op`, `id_comp`)
                                                   VALUES (NULL,?,?,?,?)");
			
			$reponse = $request->execute(array(	
												$_POST['type_op'],
												$_POST['somme_op'],
												$_POST['date_op'],
												
	
												
												//récupération de l'id principal
												$id_compE
											));
			
			return $reponse;
			
				/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXIO A LA BASE DE DONNEES*/
			unset($bdd);
		}
				

						/*METHODE QUI AJOUTE UN Admin*/
		public function ajoutOper(){
			
			$bdd = $this->connexionBdd();	

				$request = $bdd->prepare("INSERT INTO `operations`(`id_op`, `type_op`, `somme_op`, `date_op`, `id_comp`)
											VALUES (NULL,?,?,?,?)");
				
				$reponse = $request->execute(array(
													$_POST['type_op'],			
													$_POST['somme_op'],			
													$_POST['date_op'],			
													$_POST['id_comp']
													));			
					 
				return $reponse;
					
			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
		}
		//========================================================================================
		
		 public function affiche(){
	
				  $bdd = $this->connexionBdd();
				  $request = $bdd->prepare("SELECT * FROM operations ");
				  
				  $result=$request->execute();
				  
				  $contact=$request->fetchAll();
				 
				return $contact;

			}
			
			 public function affichOpe(){
	
				  $bdd = $this->connexionBdd();
			
				
				  $request = $bdd->prepare("SELECT * FROM operations WHERE  id_comp  = ".$_SESSION['id_comp']."");
				  
				  $result=$request->execute();
				  
				  $contact=$request->fetchAll();
				 
				return $contact;

			}
			
		
		
		// METHODE POUR SUPPRIMER UN ENREGISTREMENT
		public function supprimer($numContact){
			
			$bdd = $this->connexionBdd();
			
			$request = $bdd->prepare("DELETE FROM operations WHERE id_op=:num LIMIT 1");
			
			$request->bindValue(':num', $numContact, PDO::PARAM_INT);
			
			$result = $request->execute();
			
			return $result;
		}
	}
	
?>