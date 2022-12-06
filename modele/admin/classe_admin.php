<?php 
	class Administrateur
	{
		private $id_admin;
		private $email_admin;
		private $motdePass_admin;

		public function __construct($id_admin,$email_admin,$motdePass_admin)
					{
						$this->id_admin 		= $id_admin;
						$this->email_admin 		= $email_admin ;
						$this->motdePass_admin 	= $motdePass_admin;
						
					}
		
		/*LISTE DES GETTERS*/
		
		public function getId_admin()
		{
			return $this->id_admin;
		}										
												
		public function getEmail_admin()
		{
			return $this->email_admin;
		}		
		
		public function getMotdePass_admin()
		{
			return $this->motdePass_admin;
		}

		/*LISTE DES SETTERS*/
		
		public function setId_admin($id_admin)
		{
			$this->id_admin = $id_admin;
		}
		

		public function setEmail_admin($email_admin)
		{
			$this->email_admin = $email_admin;
		}		
		
		public function setMmotdePass_admin($motdePass_admin)
		{
			$this->motdePass_admin = $motdePass_admin;
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

		/*METHODE QUI AJOUTE UN Admin*/
		public function ajoutAdmin(){
			
			$bdd = $this->connexionBdd();	
			
			//requ�te pour �viter la redendance des noms
			$request = $bdd->prepare("SELECT * FROM administrateurs WHERE email_admin = :email_admin");
			$result = $request->execute(array(':email_admin'=>$this->email_admin));
			
			$result=$request->fetchobject();

			//v�rification pour s'avoir si l'objet existe
			if(!is_object($result)){

				$request = $bdd->prepare("INSERT INTO 	administrateurs(id_admin,email_admin,motdePass_admin)
										 
										         VALUES(:id_admin,:email_admin,:motdePass_admin)");
				
				$reponse = $request->execute(array(
													'id_admin'	=>$this->id_admin,			
													'email_admin'	=>$this->email_admin,
													'motdePass_admin'=>$this->motdePass_admin													
												));	
					 
				return $reponse;
					
			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXION A LA BASE DE DONNEES*/
			unset($bdd);
				}
		}
		
		//=====================================================================================
		/*METHODE QUI PERMET DE SE CONNECTE AU SITE*/
		public function connectAdmin($email_admin,$motdePass_admin){

		$bdd = $this->connexionBdd();

			$request = $bdd->prepare("SELECT * FROM administrateurs WHERE email_admin=? AND motdePass_admin=?");

			$request->execute(array($_POST['email_admin'],$_POST['motdePass_admin']));

			 $reponse = $request->fetchObject();

			 return $reponse;

			/*ON DETRUIT L'OBJET CONNEXION, CE QUI FERME LA CONNEXIO A LA BASE DE DONNEES*/
			unset($bdd);
		}
		
		// methode qui permet d'afficher  le contenu bdd
		
		 public function affiche(){
	
				  $bdd = $this->connexionBdd();
				  $request = $bdd->prepare("SELECT * FROM  administrateurs");
				  
				  $result=$request->execute();
				  
				  $contact=$request->fetchAll();
				 
				return $contact ;

			}
		//=====================================================================================

	
	}

?>