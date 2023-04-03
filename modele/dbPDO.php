<?php
class dbPdo{
	
	public static $pdo;
	public static function set_instance() {
		$host = '';
		$dbname = 'covoiturage';
		$login = 'root';
		$pass = 'root';
		
		try {
			
			self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $login, $pass);
			
		} catch (PDOException $ex) {
			
			echo $ex->getMessage();
			die('Probleme lors de la connexion a la BDD	');	
		}
	}
}

//generer un objet PDO
dbPdo::set_instance();
?>