<?php
require_once  'dbPDO.php';
class ModelUser extends dbPdo {
	
	public static function connect($login, $mdp) {
		try {
			 $log= $login;
			 $password = $mdp;
			$sql='SELECT id, Nom, Prenom, Mail, mdp,Mat,utilisateurv, admin FROM utilisateur WHERE Mail = ? AND mdp = ?';
			dbpdo::$pdo->query("SET NAMES UTF8");  
			$requete = dbpdo::$pdo->prepare($sql);
			$requete->bindValue(1,$log,PDO::PARAM_STR);
			$requete->bindValue(2,$password,PDO::PARAM_STR);
			/*$sql='SELECT id, Nom, Prenom, Mail, mdp,CodeB, utilisateurv,utilisateurnonv,admin FROM utilisateur WHERE Mail = 'Admin@gmail.com' AND mdp = 'Admin' ';*/  
			$requete->execute();
			$liste=$requete->fetch();
			return $liste;
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}
	}
	public static function categ($categ,$id)
	{
		try {
			
			$sql='UPDATE utilisateur SET utilisateurv="'.$categ.'"WHERE id= "'.$id.'" ' ;
			//$sql = 'UPDATE `utilisateur` SET `utilisateurv`= 'vehicule' where id =2 
			$result=dbPdo::$pdo->exec($sql);
			
			}catch (PDOException $e) {
				echo $e->getMessage();
				die("Erreur dans la BDD");
			}

	}
	/*
	public static function ajouteleve($nom, $prenom, $classe, $login, $mdp,$num_e)
    {
	try 
	{
		$sql='INSERT INTO users(id_eleve,nom, prenom, classe, login, mdp, admin, num_e) VALUES(NULL,"'.$nom.'","'.$prenom.'","'.$classe.'","'.$login.'","'.$mdp.'",0,"'.$num_e.'")';
		$result=dbPdo::$pdo->exec($sql);
	}catch (PDOException $e) 
	{
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
    }
	public static function suppressionusers()
    {
	try 
	{
		$sql='DELETE FROM `users` WHERE admin = 0';
		$result=dbPdo::$pdo->exec($sql);
	}catch (PDOException $e) 
	{
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
    }


	public static function importUser($sheet)
    {
	try 
	{
		
		$columnA = 'A'; // On choisit de regarder la colonne A
$columnB= 'B';
$columnC='C';
$columnD='D';
$columnE='E';
$columnF='F';
$lastRow = $sheet->getHighestRow(); // Dans notre excel on va récupérer le numero de la dernière ligne remplis

$listeA=array();
$listeB=array();
$listeC=array();
$listeD=array();
$listeE=array();
$listeF=array();
$i=0;
for ($row = 2; $row <=$lastRow; $row++) 
{ // Pour chaque ligne jusqu'a la dernière on récupère la cellule
        $cellA = $sheet->getCell($columnA.$row);
        $cellB = $sheet->getCell($columnB.$row);
        $cellC = $sheet->getCell($columnC.$row);
        $cellD = $sheet->getCell($columnD.$row);
        $cellE = $sheet->getCell($columnE.$row);
        $cellF = $sheet->getCell($columnF.$row);
        
            $listeA[$i]= $cellA->getValue();
            $listeB[$i]= $cellB->getValue();
            $listeC[$i]= $cellC->getValue();
            $listeD[$i]= $cellD->getValue(); 
            $listeE[$i]= $cellE->getValue();
            $listeF[$i]= $cellF->getValue();
        $sql = 'INSERT INTO users(id_eleve,nom, prenom, classe, login, mdp, admin, num_e) VALUES(NULL,"'.$listeA[$i].'","'.$listeB[$i].'","'.$listeC[$i].'","'.$listeD[$i].'","'.$listeE[$i].'",0,"'.$listeF[$i].'")';
        $result=dbPdo::$pdo->exec($sql);
        $i++;
    
}
	}catch (PDOException $e) 
	{
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
    }
	
	public static function listconf($id)
    {
	try 
	{
		$sql='SELECT DISTINCT(conference.id),titre, salle, place, photo, theme, dateConference, conference.creneau, description FROM reservation,conference WHERE conference.id = reservation.id_conference AND reservation.id_eleve='.$id.';';
		$result=dbPdo::$pdo->query($sql);
		$liste=$result->fetchAll();
		return $liste;

	}catch (PDOException $e) 
	{
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
    } 
	
	public static function suppliste($id,$idconf)
    {
	try 
	{
		$sql="DELETE FROM reservation WHERE id_eleve = $id AND id_conference = $idconf";
			$result=dbPdo::$pdo->exec($sql);

	}catch (PDOException $e) 
	{
		echo $e->getMessage();
		die("Erreur dans la BDD");
	}
    }*/

}
?>