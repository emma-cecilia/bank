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

		public function  __construct( $id_cl, $numero_matricule_cl,$nom_cl, $prenom_cl,$date_naissance_cl,
										$email_cl, $motdePass_cl)
					{
						$this->id_cl 		        = $id_cl;
						$this->numero_matricule_cl = $numero_matricule_cl;
						$this->nom_cl 		        = $nom_cl;
						$this->prenom_cl 	        = $prenom_cl;
						$this->date_naissance_cl   = $date_naissance_cl;
						$this->email_cl	        = $email_cl;
						$this->motdePass_cl 	    = $motdePass_cl;
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
		
		
		/*Connexion � la base de Donn�es*/
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
		
			
		
	
		
		/*METHODE QUI AJOUTE UN COMPTE CLIENT*/
		public function addAjout_Client(){
			
			$bdd = $this->connexionBdd();
			
			// requ�te pour �viter la redendance des noms
			$request = $bdd->prepare("SELECT * FROM clients WHERE  = :nom_cl");
			$result = $request->execute(array(':nom_cl'=>$this->nom_cl));
			
			$result=$request->fetchobject();

			// v�rification pour s'avoir si l'objet existe
			if(!is_object($result)){
									  
				$request = $bdd->prepare("INSERT INTO clients (id_cl,numero_matricule_cl,nom_cl,prenom_cl,
											date_naissance_cl,email_cl,motdePass_cl)
										
										VALUES(:id_cl,:numero_matricule_cl,:nom_cl,:prenom_cl,
											 :date_naissance_cl,:email_cl,:motdePass_cl)");
				
				$reponse = $request->execute(array(
													'id_cl'	=>$this->id_cl,
													'numero_matricule_cl' =>$this->numero_matricule_cl,													
													'nom_cl'	=>$this->nom_cl,
													'prenom_cl'=>$this->prenom_cl,
													'date_naissance_cl'=>$this->date_naissance_cl,
													'email_cl'	=>$this->email_cl,
													'motdePass_cl'	=>$this->motdePass_cl
												
								
												));	
					 
				return $reponse;
					
			// /*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				}
		}
		
		//=====================================================================================
		
		// METHODE QUI PERMET AUX CLIENTS D'ETRE CONNECTE A LA BASE DE DONNEE
		public function connecteClients($email_cl,$motdePass_cl){

		$bdd = $this->connexionBdd();  

		$request = $bdd->prepare("SELECT * FROM clients LEFT JOIN comptes ON clients.id_cl = comptes.id_comp WHERE email_cl=? AND motdePass_cl=?");

		$request->execute(array($_POST['email_cl'],$_POST['motdePass_cl']));
		
			$reponse=$request->fetchObject();
			 

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
		// public function recupInfos(){
			
			// $bdd = $this->connexionBdd();
			
			// $request = $bdd->prepare("SELECT * FROM employes WHERE id_emp=:num");

			// $request->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);
			
			// $result = $request->execute();
			
			// $contact=$request->fetch();
			
			// return $contact;
		// }
		//MODIFICATION DES DONNER
			// public function modifierClient(){
			
			// $bdd = $this->connexionBdd();
												
			// $request = $bdd->prepare("UPDATE employes SET numero_matricule_emp=:numero_matricule_emp,
									// nom_emp=:nom_emp,prenom_emp=:prenom_emp,date_naissance_emp=:date_naissance_emp,
									// email_emp=:email_emp,motdePass_emp=:motdePass_emp,id_admin=:id_admin, WHERE id_emp=:num LIMIT 1");

			// $request->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
			// $request->bindValue(':numero_matricule_emp', $_POST['numero_matricule_emp'], PDO::PARAM_STR);
			// $request->bindValue(':nom_emp', $_POST['nom_emp'], PDO::PARAM_STR);
			// $request->bindValue(':prenom_emp', $_POST['prenom_emp'], PDO::PARAM_STR);
			// $request->bindValue(':date_naissance_emp', $_POST['date_naissance_emp'], PDO::PARAM_STR);
			// $request->bindValue(':email_emp', $_POST['email_emp'], PDO::PARAM_STR);
			// $request->bindValue(':motdePass_emp', $_POST['motdePass_emp'], PDO::PARAM_STR);
			// $request->bindValue(':id_admin', $_POST['id_admin'], PDO::PARAM_INT);


			// $result = $request->execute();
			
			// return $result;
		// }
		
		// METHODE POUR RECUPERER UN ENREGISTREMENT
		public function recupClients($numClient){
			
			$bdd = $this->connexionBdd();
			
			$request = $bdd->prepare("SELECT * FROM clients WHERE id_cl=:num LIMIT 1");
			
			$request->bindValue(':num', $numClient, PDO::PARAM_INT);
			
			$result = $request->execute();
			$contact=$request->fetchAll();
			
			return $contact;
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