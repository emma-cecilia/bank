//recuperer les information d'un produit

public function getClientById($id){
	$bdd=$this->connectDatabase();
	$requete=$bdd->prepare("SELECT * FROM produit 
						WHERE id =:id");
	$requete->execute(array(':id' =>$id));
	
	$result=$requete->fetchObject();
	
	$this->id_produit		 	= $result->id_produit;
	$this->titre_produit 		= $result->titre_produit;
	$this->description_produit 	= $result->description_produit;
	
//on detruit l'objet connexion ce qui ferme la connexion a la bdd
unset($bdd);
	
	
}