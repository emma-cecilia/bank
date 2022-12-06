<?php 
	class employe_creerCompte
	{
		private $id_emp;
		private $numero_matricule_emp;
		private $nom_emp;
		private $prenom_emp;
		private $date_naissance_emp;
		private $email_emp;
		private $motdePass_emp;
		private $id_admin;

		public function  __construct($id_emp,$numero_matricule_emp,$nom_emp,$prenom_emp,$date_naissance_emp,$email_emp,$motdePass_emp,$id_admin)
					{
						$this->id_emp 		        = $id_emp;
						$this->numero_matricule_emp = $numero_matricule_emp;
						$this->nom_emp 		        = $nom_emp;
						$this->prenom_emp 	        = $prenom_emp;
						$this->date_naissance_emp   = $date_naissance_emp;
						$this->email_emp	        = $email_emp;
						$this->motdePass_emp 	    = $motdePass_emp;
						$this->id_admin 	        = $id_admin;
					}
		
		/*LISTE DES GETTERS*/
		
		public function getId_emp()
		{
			return $this->id_emp;
		}
		public function getNumero_matricule_emp()
		{
			return $this->numero_matricule_emp;
		}
		
		public function getNom_emp()
		{
			return $this->nom_emp;
		}		
		
		public function getPrenom_emp()
		{
			return $this->prenom_emp;
		}
		public function getDate_naissance_emp()
		{
			return $this->date_naissance_emp;
		}		
		
		public function getEmail_emp()
		{
			return $this->email_emp;
		}		
		
		public function getMotdePass_emp()
		{
			return $this->motdePass_emp;
		}
		public function getId_admin()
		{
			return $this->id_admin;
		}

		/*LISTE DES SETTERS*/
		
		public function setId_empl($id_emp)
		{
			$this->id_emp = $id_emp;
		}
		
		public function setNumero_matricule_emp($numero_matricule_emp)
		{
			$this->numero_matricule_emp = $numero_matricule_emp;
		}
		public function setNom_emp($nom_emp)
		{
			$this->nom_emp = $nom_emp;
		}		
		
		public function setPrenom_emp($prenom_emp)
		{
			$this->prenom_emp = $prenom_emp;
		}
		public function setDate_naissance_emp($date_naissance_emp)
		{
			$this->date_naissance_emp = $date_naissance_emp;
		}		
		
		public function setEmail_emp($email_emp)
		{
			$this->email_emp = $email_emp;
		}		
		
		public function setMotdePass_emp($motdePass_emp)
		{
			$this->motdePass_emp = $motdePass_emp;
		}
		public function setId_admin($id_admin)
		{
			$this->id_admin = $id_admin;
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

			
			
				//METHODE POUR AFFICHER LES ENREGISTREMENTS DANS INPUT DU FORMULAIRE
		public function recupInfos(){
			
			$bdd = $this->connexionBdd();
			
			$request = $bdd->prepare("SELECT * FROM employes WHERE id_emp=:num");

			$request->bindValue(':num', $_GET['numContact'], PDO::PARAM_INT);
			
			$result = $request->execute();
			
			$contact=$request->fetch();
			
			return $contact;
		}
		//MODIFICATION DES DONNER
			public function modifierEployer(){
			
			$bdd = $this->connexionBdd();
												
			$request = $bdd->prepare("UPDATE employes SET numero_matricule_emp=:numero_matricule_emp,
									nom_emp=:nom_emp,prenom_emp=:prenom_emp,date_naissance_emp=:date_naissance_emp,
									email_emp=:email_emp,motdePass_emp=:motdePass_emp WHERE id_emp=:num LIMIT 1");

			$request->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
			$request->bindValue(':numero_matricule_emp', $_POST['numero_matricule_emp'], PDO::PARAM_STR);
			$request->bindValue(':nom_emp', $_POST['nom_emp'], PDO::PARAM_STR);
			$request->bindValue(':prenom_emp', $_POST['prenom_emp'], PDO::PARAM_STR);
			$request->bindValue(':date_naissance_emp', $_POST['date_naissance_emp'], PDO::PARAM_STR);
			$request->bindValue(':email_emp', $_POST['email_emp'], PDO::PARAM_STR);
			$request->bindValue(':motdePass_emp', $_POST['motdePass_emp'], PDO::PARAM_STR);
		   
			$result = $request->execute();
			
			return $result;
	}
		
		// METHODE POUR SUPPRIMER UN ENREGISTREMENT
		public function supprimer($numContact){
			
			$bdd = $this->connexionBdd();
			
			$request = $bdd->prepare("DELETE FROM employes WHERE id_emp=:num LIMIT 1");
			
			$request->bindValue(':num', $numContact, PDO::PARAM_INT);
			
			$result = $request->execute();
			
			return $result;
		}
	}
	
?>