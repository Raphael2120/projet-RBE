<?php 
require_once  'dbPDO.php';
class ModelTrajet extends dbPdo {	
	public static function affichetrajet() {
		try {
			
			$sql='SELECT * FROM cov';
			$result=dbPdo::$pdo->query($sql);
			$liste=$result->fetchAll();
			return $liste;
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}
	
	public static function affichemestrajets($id) {
		try {
			
			$sql="SELECT * FROM cov WHERE iduscov= $id;";
			$result=dbPdo::$pdo->query("SET NAMES UTF8");
			$result=dbPdo::$pdo->query($sql);
			$mestrajets=$result->fetchAll();
			return $mestrajets;
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}
	public static function mestrajetsreserves($id) {
		try {
			
			$sql="SELECT * FROM utilisateur, reservation, cov WHERE utilisateur.id= reservation.id_utilisateur AND cov.idcov = reservation.id_cov AND reservation.id_utilisateur=$id;";
			$result=dbPdo::$pdo->query("SET NAMES UTF8");
			$result=dbPdo::$pdo->query($sql);
			$mestrajets=$result->fetchAll();
			return $mestrajets;
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}


    public static function supprimertrajet($id){
        try {
			
			$sql="DELETE FROM cov WHERE idcov = $id";
			$result=dbPdo::$pdo->exec($sql);
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
    }
    public static function ajout($lieudev,$lieuar, $nbreplace, $date,$Choixvehicle,$iduscov,$immat)
    {
	try 
	{
		$sql='INSERT INTO cov(idcov, Datedep,Lieudep,Lieuarr,Nbplace,Choixvehicle,iduscov,immatricu) VALUES(NULL,"'.$date.'","'.$lieudev.'","'.$lieuar.'","'.$nbreplace.'","'.$Choixvehicle.'","'.$iduscov.'","'.$immat.'")';
		$result=dbpdo::$pdo->query("SET NAMES UTF8"); 
		$result=dbPdo::$pdo->exec($sql);
	}catch (PDOException $e) 
	{   
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
    }
	public static function reservertrajets($idu,$idcov, $idep, $arr, $cond, $status)
    {
	try 
	{
		$sql='INSERT INTO reservation(id,id_cov,id_utilisateur, Lieudep, Lieuarr, idcond, Choix) VALUES(NULL,"'.$idcov.'","'.$idu.'","'.$idep.'","'.$arr.'","'.$cond.'","'.$status.'")';
		$result=dbpdo::$pdo->query("SET NAMES UTF8"); 
		$result=dbPdo::$pdo->exec($sql);
	}catch (PDOException $e) 
	{   
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
    }
	public static function demandetrajets($idu)
    {
	try 
	{
		$sql="SELECT * FROM reservation, cov WHERE reservation.idcond = cov.iduscov AND idcond= $idu;";
		$result=dbpdo::$pdo->query("SET NAMES UTF8"); 
		$result=dbPdo::$pdo->query($sql);
		$listedemande=$result->fetchAll();
		return $listedemande;
	}catch (PDOException $e) 
	{   
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
    }
	public static function choixtrajets($idu, $choix)
    {
	try 
	{
		$sql='UPDATE reservation SET Choix="'.$choix.'" WHERE id= "'.$idu.'" ' ;
		$result=dbpdo::$pdo->query("SET NAMES UTF8"); 
		$result=dbPdo::$pdo->exec($sql);
	}catch (PDOException $e) 
	{   
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
    }
	public static function nbreplaces($place,$cov)
    {
	try 
	{	$place = $place-1;
		$sql='UPDATE cov SET Nbplace="'.$place.'"WHERE idcov= "'.$cov.'" ' ;
		$result=dbpdo::$pdo->query("SET NAMES UTF8"); 
		$result=dbPdo::$pdo->exec($sql);
	}catch (PDOException $e) 
	{   
		echo $e->getMessage();
		die("Erreur dans la BDD");
	} 
}
	public static function cherchetrajet($nom)
    {
	try 
	{	$sql="SELECT * FROM cov WHERE Lieudep='".$nom."'OR Lieuarr='".$nom."';"; 
		$result=dbPdo::$pdo->query("SET NAMES UTF8");
		$result=dbPdo::$pdo->query($sql);
		$mestrajets=$result->fetchAll();
		return $mestrajets;
	}catch (PDOException $e) 
	{   
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
}
public static function affichelistepassager($id) {
	try {
		$sql="SELECT * FROM reservation, utilisateur, cov WHERE reservation.id_utilisateur = utilisateur.id AND reservation.id_cov= cov.idcov AND Choix = 'Accepter' AND reservation.idcond =$id ;";
		$result=dbPdo::$pdo->query("SET NAMES UTF8");
		$result=dbPdo::$pdo->query($sql);
		$leslignes=$result->fetchAll();
		return $leslignes;
		
		}catch (PDOException $e) {
			echo $e->getMessage();
			die("Erreur dans la BDD");
		}
}
public static function chercherreserves($id, $cov) {
	try {
		$sql="SELECT * FROM reservation  WHERE reservation.id_utilisateur = $id AND id_cov=$cov;";
		$result=dbPdo::$pdo->query("SET NAMES UTF8");
		$result=dbPdo::$pdo->query($sql);
		$leslignes=$result->fetchAll();
		return $leslignes;
		
		}catch (PDOException $e) {
			echo $e->getMessage();
			die("Erreur dans la BDD");
		}
}
public static function afficheletrajet($modif, $idcov) {
	try {
		$sql="SELECT * FROM cov  WHERE idcov = $modif AND iduscov=$idcov;";
		$result=dbPdo::$pdo->query("SET NAMES UTF8");
		$result=dbPdo::$pdo->query($sql);
		$leslignes=$result->fetch();
		return $leslignes;
		
		}catch (PDOException $e) {
			echo $e->getMessage();
			die("Erreur dans la BDD");
		}
}


	
	public static function modiftrajet($date,$dep,$arr,$choix,$place,$imma,$cov,$user) {
		try {
			
			$sql='UPDATE cov SET Datedep="'.$date.'",Lieudep="'.$dep.'",Lieuarr="'.$arr.'",Nbplace="'.$place.'",Choixvehicle="'.$choix.'",immatricu="'.$imma.'" WHERE idcov= "'.$cov.'" AND iduscov="'.$user.'";';
			$result=dbPdo::$pdo->exec($sql);
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}
	public static function affichepersonne() {
		try {
			
			$sql="SELECT * FROM utilisateur WHERE NOT utilisateur.admin = 'Oui';";
			$result=dbPdo::$pdo->query("SET NAMES UTF8");
			$result=dbPdo::$pdo->query($sql);
			$leslignes=$result->fetchAll();
			return $leslignes;
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}
	/*
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