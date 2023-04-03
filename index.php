<?php 
session_start();
//Header
include 'vues/entete.php';
//CONTROLEUR//
if(isset($_GET['ctl']))
	{   
		$control = $_GET['ctl'];
		switch($control)
		{
			case "login":
				include 'controleur/ctLogin.php';
				break;
			case "trajet":
				include 'controleur/ctLtrajet.php';
			    break;
			case "vehicule":
				include 'controleur/ctlvehicule.php';
				break;
            case "eleve":
				include 'controleur/ctleleve.php';
		}
	} 

//Connexion
if(!isset($_SESSION['Mail']))
{   
    include 'vues/connexion.php';
    
}
//Footer
include 'vues/pied.php';
?>