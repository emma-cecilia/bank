<?php 
	class ConnexionEmploye
	{
		private $id_emp; 
		private $email_emp;
		private $motdePass_emp;

		public function __construct($id_emp,$email_emp,$motdePass_emp)
					{
						$this->id_emp 	 = $id_emp;
						$this->email_emp = $email_emp ;
						$this->motdePass_emp = $motdePass_emp;
					}
		
		/*LISTE DES GETTERS*/
		
		public function getId_emp()
		{
			return $this->id_emp;
		}							
		
		public function getEmail_emp()
		{
			return $this->email_emp;
		}		
		
		public function getMotdePass_emp()
		{
			return $this->motdePass_emp;
		}		

		/*LISTE DES SETTERS*/
		
		public function setId_emp($id_emp)
		{
			$this->id_emp = $id_emp;
		}
		
		public function setEmail_emp($email_emp)
		{
			$this->email_emp = $email_emp;
		}		
		
		public function setMotdePass_emp($motdePass_emp)
		{
			$this->motdePass_emp = $motdePass_emp;
		}		
		
		/*Connexion � la base de Donn�es*/
		public function connexionBdd()
		{			
			try{
				///$bdd = new PDO('mysql:host=localhost;dbname=apprenant;charset=utf8', 'root', 'password');
				$bdd = new PDO('mysql:host=localhost;dbname=ub_banque;charset=utf8', 'root', '');
				 return $bdd;
			}catch(Exception $e){
				die('Erreur : ' . $e->getMessage());
			}
		}
		
		
		/*METHODE QUI AJOUTE UN EMPLOYE*/
		public function ajoutClient(){
			
			$bdd = $this->connexionBdd();
			
			//requ�te pour �viter la redendance des noms
			$request = $bdd->prepare("SELECT * FROM  WHERE  = :email_emp");
			$result = $request->execute(array(':email_emp'=>$this->email_emp));
			
			$result=$request->fetchobject();

			//v�rification pour s'avoir si l'objet existe
			if(!is_object($result)){
									
				$request = $bdd->prepare("INSERT INTO creer_site
										        (id_emp,email_emp,motdePass_emp) 
										 
										VALUES(:id_emp,:email_emp,:motdePass_emp)");
				
				$reponse = $request->execute(array(
													'id_emp'	=>$this->id_emp,
													'email_emp'	=>$this->email_emp,
													'motdePass_emp'	=>$this->motdePass_emp
								
												));	
					 
				return $reponse;
					
			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				}
		}
		
		//=====================================================================================
		
		// METHODE QUI PERMET A L'EMPLOYER D'ETRE CONNECTE A LA BASE DE DONNEE
		public function connecteClient($email_emp,$motdePass_emp){

		$bdd = $this->connexionBdd();  

			$request = $bdd->prepare("SELECT * FROM  WHERE email_emp=? AND motdePass_emp=?");

		$request->execute(array($_POST['email_emp'],$_POST['motdePass_emp']));

			 $reponse = $request->fetch();

			 return $reponse;

			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXIO A LA BASE DE DONNEES*/
			unset($bdd);
	
		}
		
		public function afficher(){
			
			$bdd = $this->connexionBdd();
			
			$request = $bdd->prepare("SELECT * FROM `format`");
			
			$result = $request->execute();
			
			$contact=$request->fetchAll();
			
			return $contact;
		}
		
		
		
		
		
		
		
	
	}
	
?>