<?php 
require_once  'dbPDO.php';
class Modelvehicule extends dbPdo {	
	public static function affichevehicule($iduser) {
		try {
			$sql="SELECT idvehicule,immat, Marque, Modele, iduser FROM vehicule WHERE iduser = $iduser";
            $result=dbPdo::$pdo->query("SET NAMES UTF8");
			$result=dbPdo::$pdo->query($sql);
			$liste=$result->fetchAll();
			return $liste;
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}/*
	public static function afficheuneligne($id) {
		try {
			
			$sql="SELECT * FROM conference WHERE id= $id;";
			$result=dbPdo::$pdo->query($sql);
			$uneligne=$result->fetch();
			return $uneligne;
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}


    public static function supprime($id){
        try {
			
			$sql="DELETE FROM conference WHERE id = $id";
			$result=dbPdo::$pdo->exec($sql);
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
    }*/
    public static function ajout($immat,$marque, $modele, $iduser)
    {
	try 
	{
		$sql='INSERT INTO vehicule(idvehicule, immat, Marque,Modele,iduser) VALUES(NULL,"'.$immat.'","'.$marque.'","'.$modele.'","'.$iduser.'")';
        $result=dbpdo::$pdo->query("SET NAMES UTF8"); 
		$result=dbPdo::$pdo->exec($sql);
	}catch (PDOException $e) 
	{   
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
    }
	
	/*public static function modifier($id, $titre, $salle, $place, $theme, $date, $photo, $desc, $creneau) {
		try {
			
			$sql='UPDATE conference SET titre="'.$titre.'",salle="'.$salle.'",place="'.$place.'",theme="'.$theme.'",dateConference="'.$date.'",photo="'.$photo.'",description="'.$desc.'", creneau="'.$creneau.'" WHERE id= "'.$id.'" ' ;
			$result=dbPdo::$pdo->exec($sql);
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}
	public static function mettreajouruneinfo($id,$info)
    { 
	try 
	{ 
		$sql='UPDATE information SET Information="'.$info.'" WHERE idinfo= "'.$id.'" ' ;
		$result=dbPdo::$pdo->query('SET NAMES UTF8');
		$result=dbPdo::$pdo->exec($sql);
	}catch (PDOException $e) 
	{
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
    }
	public static function afficheuneinfo() {
		try {
			
			$sql="SELECT * FROM information ";
			$result=dbPdo::$pdo->query('SET NAMES UTF8');
			$result=dbPdo::$pdo->query($sql);
			$uneligne=$result->fetch();
			return $uneligne;
			
			}catch (PDOException $e) {

				echo $e->getMessage();
				die("Erreur dans la BDD");
				
			}
	}
	public static function inscripevent($id_conf,$id_el,$creneau) {
		try {
			$sql='INSERT INTO reservation(id,id_conference, id_eleve, creneau) VALUES(CURRENT_TIMESTAMP,"'.$id_conf.'","'.$id_el.'","'.$creneau.'")';
			$result=dbPdo::$pdo->exec($sql);
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}
	public static function afficheunevenement($id) {
		try {
			$sql="SELECT id,titre, salle, place, photo, theme, dateConference, creneau, description FROM conference WHERE id = $id";
		    $result=dbPdo::$pdo->query($sql);
			$uneligne=$result->fetch();
			return $uneligne;
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}
	public static function affichesconférences() {
		try {
			$sql="SELECT DISTINCT(titre), id,creneau FROM conference ;";
		    $result=dbPdo::$pdo->query($sql);
			$uneligne=$result->fetchAll();
			return $uneligne;
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}
			public static function listeinscrits($id) {
				try {
					$sql='SELECT DISTINCT(nom),prenom,classe FROM users,reservation,conference WHERE reservation.id_conference='.$id.' AND reservation.id_eleve = users.id_eleve;';
					$result=dbPdo::$pdo->query($sql);
					$uneligne=$result->fetchAll();
					return $uneligne;
					
					}catch (PDOException $e) {
						echo $e->getMessage();
						die("Erreur dans la BDD");
					}
	}
	public static function affichelisteclasse() {
		try {
			$sql='SELECT DISTINCT(classe) AS Libelle FROM users;';
			$result=dbPdo::$pdo->query($sql);
			$uneligne=$result->fetchAll();
			return $uneligne;
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
}
public static function affichelisteinscritclasse($classe) {
	try {
		/*$sql='SELECT DISTINCT(nom),prenom,classe FROM users,reservation, conference WHERE reservation.id_eleve = users.id_eleve AND users.classe='.$classe.'conference.id_eleve IN (SELECT id_eleve FROM users;);';*/
		/*$sql='SELECT DISTINCT(nom),prenom FROM users,reservation WHERE reservation.id_eleve = users.id_eleve AND users.classe = "'.$classe.'";'; 
		$result=dbPdo::$pdo->query($sql);
		$uneligne=$result->fetchAll();
		return $uneligne;
		
		}catch (PDOException $e) {
			echo $e->getMessage();
			die("Erreur dans la BDD");
		}
}*/
	
}
?>