<?php 
	class client_creerCompte
	{
		private $id_cl;
		private $numero_matricule_cl;
		private $nom_cl;
		private $prenom_cl;
		private $date_naissance_cl;
		private $email_cl;
		private $motdePass_cl;
		private $comptes_id_comp;

		public function  __construct( $id_cl,$numero_matricule_cl,$nom_cl,$prenom_cl,$date_naissance_cl,
										$email_cl,$motdePass_cl,$comptes_id_comp)
					{
						$this->id_cl 		        = $id_cl;
						$this->numero_matricule_cl = $numero_matricule_cl;
						$this->nom_cl 		        = $nom_cl;
						$this->prenom_cl 	        = $prenom_cl;
						$this->date_naissance_cl   = $date_naissance_cl;
						$this->email_cl	        = $email_cl;
						$this->motdePass_cl 	    = $motdePass_cl;
						$this->comptes_id_comp 	        = $comptes_id_comp;
					}
		
		/*LISTE DES GETTERS*/
		
		public function getId_cl()
		{
			return $this->id_cl;
		}
		public function getNumero_matricule_cl()
		{
			return $this->numero_matricule_cl;
		}
		
		public function getNom_cl()
		{
			return $this->nom_cl;
		}		
		
		public function getPrenom_cl()
		{
			return $this->prenom_cl;
		}
		public function getDate_naissance_cl()
		{
			return $this->date_naissance_cl;
		}		
		
		public function getEmail_cl()
		{
			return $this->email_cl;
		}		
		
		public function getMotdePass_cl()
		{
			return $this->motdePass_cl;
		}
		public function getComptes_id_comp()
		{
			return $this->comptes_id_comp;
		}

		/*LISTE DES SETTERS*/
		
		public function setId_cl($id_cl)
		{
			$this->id_cl = $id_cl;
		}
		
		public function setNumero_matricule_cl($numero_matricule_cl)
		{
			$this->numero_matricule_cl = $numero_matricule_cl;
		}
		public function setNom_cl($nom_cl)
		{
			$this->nom_cl = $nom_cl;
		}		
		
		public function setPrenom_cl($prenom_cl)
		{
			$this->prenom_cl = $prenom_cl;
		}
		public function setDate_naissance_cl($date_naissance_cl)
		{
			$this->date_naissance_cl = $date_naissance_cl;
		}		
		
		public function setEmail_cl($email_cl)
		{
			$this->email_cl = $email_cl;
		}		
		
		public function setMotdePass_cl($motdePass_cl)
		{
			$this->motdePass_cl = $motdePass_cl;
		}
		public function setComptes_id_comp($comptes_id_comp)
		{
			$this->comptes_id_comp = $comptes_id_comp;
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
				
				
			public function addAjout_Client()
		{
			$bdd = $this->connexionBdd();
					
			//chemin pour id postlant
			 $request = $bdd->prepare("SELECT `id_comp` FROM `comptes` ORDER BY `id_comp` DESC") ;
			
			 $result = $request->execute();
			
			$result=$request->fetchAll();
			
			//Affectation de l'creer_compte_id_creercompte dans l'id de etrang�re  
			 $comptes_id_comp = $result[0]['id_comp'];
// /*--------------------------------------------------------------------------*/
			$request = $bdd->prepare("INSERT INTO clients (id_cl,numero_matricule_cl,nom_cl,prenom_cl,
										date_naissance_cl,email_cl,motdePass_cl,comptes_id_comp) 
                                                   VALUES (NULL,?,?,?,?,?,?,?)");
			
			$reponse = $request->execute(array(	
												$_POST['numero_matricule_cl'],
												$_POST['nom_cl'],
												$_POST['prenom_cl'],
												$_POST['date_naissance_cl'],
												$_POST['email_cl'],
												$_POST['motdePass_cl'],
												
												//r�cup�ration de l'id principal
												$comptes_id_comp
											));
			
			return $reponse;
			
				/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXIO A LA BASE DE DONNEES*/
			unset($bdd);
		}
		
		
		//=====================================================================================
		
		// METHODE QUI PERMET AUX CLIENTS D'ETRE CONNECTE A LA BASE DE DONNEE
		public function connecteEmploye($email_cl,$motdePass_cl){

		$bdd = $this->connexionBdd();  

			$request = $bdd->prepare("SELECT * FROM clients WHERE email_cl=? AND motdePass_cl=?");

		$request->execute(array($_POST['email_cl'],$_POST['motdePass_cl']));

			 $reponse = $request->fetch();

			 return $reponse;

			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXIO A LA BASE DE DONNEES*/
			unset($bdd);
	
		}
		// methode qui permet d'afficher  le contenu bdd
		
		 public function affiche(){
	
				  $bdd = $this->connexionBdd();
				  $request = $bdd->prepare("SELECT * FROM clients ");
				  
				  $result=$request->execute();
				  
				  $contact=$request->fetchAll();
				 
				return $contact ;

			}
			
				
				//METHODE POUR AFFICHER LES ENREGISTREMENTS DANS INPUT DU FORMULAIRE
		public function recupInfos(){
			
			$bdd = $this->connexionBdd();
			
			$request = $bdd->prepare("SELECT * FROM clients WHERE id_cl=:num");

			$request->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);
			
			$result = $request->execute();
			
			$contact=$request->fetch();
			
			return $contact;
		}
		//MODIFICATION DES DONNER
			public function modifierClient(){  
			
			$bdd = $this->connexionBdd();
												
			$request = $bdd->prepare("UPDATE clients SET numero_matricule_cl=:numero_matricule_cl,
									nom_cl=:nom_cl,prenom_cl=:prenom_cl,date_naissance_cl=:date_naissance_cl,
									email_cl=:email_cl,motdePass_cl=:motdePass_cl WHERE id_cl=:num LIMIT 1");

			$request->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
			$request->bindValue(':numero_matricule_cl', $_POST['numero_matricule_cl'], PDO::PARAM_STR);
			$request->bindValue(':nom_cl', $_POST['nom_cl'], PDO::PARAM_STR);
			$request->bindValue(':prenom_cl', $_POST['prenom_cl'], PDO::PARAM_STR);
			$request->bindValue(':date_naissance_cl', $_POST['date_naissance_cl'], PDO::PARAM_STR);
			$request->bindValue(':email_cl', $_POST['email_cl'], PDO::PARAM_STR);
			$request->bindValue(':motdePass_cl', $_POST['motdePass_cl'], PDO::PARAM_INT);
		   
			$result = $request->execute();
			
			return $result;
	}
		
		// METHODE POUR SUPPRIMER UN ENREGISTREMENT
		public function supprimer($numContact){
			
			$bdd = $this->connexionBdd();
			
			$request = $bdd->prepare("DELETE FROM clients WHERE id_cl=:num LIMIT 1");
			
			$request->bindValue(':num', $numContact, PDO::PARAM_INT);
			
			$result = $request->execute();
			
			return $result;
		}
	}
	
?>