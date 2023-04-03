<?php require_once 'modele/modelevehicule.php'; 
$action = $_GET['action']; 
switch($action){
		case 'enregistrervehicule': 
		{
			    $immat = htmlspecialchars($_POST['nimmat']);
				$modele = htmlspecialchars($_POST['modele']);
				$marque = htmlspecialchars($_POST['marque']);
                $iduser = htmlspecialchars($_SESSION['id']);
				/*$place = htmlspecialchars($_POST['nbpaces']);
				$theme = htmlspecialchars($_POST['theme']);
				$date = htmlspecialchars($_POST['date']);
				$photo = htmlspecialchars($_POST['photo']);
				$desc = htmlspecialchars($_POST['descrip']);
				$creneau = htmlspecialchars($_POST['hour'].' - '.$_POST['hourtwo']);*/
				Modelvehicule::ajout($immat, $marque, $modele, $iduser);
			    include('vues/trajets/accueiltrajet.php');
                break;
		}
		case 'listetrajet':
			{  include('vues/trajets/cherchetrajet.php');
			   break;
			}
}?>