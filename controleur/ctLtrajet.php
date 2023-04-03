<?php require_once 'modele/modeletrajet.php'; 
		require_once 'modele/modelevehicule.php'; 
$action = $_GET['action']; 
switch($action){
		//Affiche liste : 
		case 'affichetrajet':
		{   $listetrajet = ModelTrajet::affichetrajet();
			include('vues/trajets/accueiltrajet.php');
		   break;
		}
		case 'ajoutvehicule':
			{  include('vues/trajets/ajoutvehicule.php');
			   break;
			}
			case 'ajouttrajet':
				{   $lesvehicules = Modelvehicule::affichevehicule($_SESSION['id']);
					include('vues/trajets/formtrajet.php');
				   break;
				}

		case 'enregistrer': 
		{
			    
			    $dep = htmlspecialchars($_POST['lieudep']);
				$arr = htmlspecialchars($_POST['lieuar']);
				$Nbreplace = htmlspecialchars($_POST['nombreplace']);
				$date = htmlspecialchars($_POST['date']);
				/*$immat = htmlspecialchars($_POST['nimmat']);*/
				$vehicule = htmlspecialchars($_POST['choivehicule']);
				$immat = htmlspecialchars($_POST['immat']);
				$iduserv = htmlspecialchars($_SESSION['id']);
				/*$place = htmlspecialchars($_POST['nbpaces']);
				$theme = htmlspecialchars($_POST['theme']);
				$date = htmlspecialchars($_POST['date']);
				$photo = htmlspecialchars($_POST['photo']);
				$desc = htmlspecialchars($_POST['descrip']);
				$creneau = htmlspecialchars($_POST['hour'].' - '.$_POST['hourtwo']);*/
				ModelTrajet::ajout($dep, $arr, $Nbreplace, $date, $vehicule, $iduserv, $immat);
			    include('vues/trajets/formtrajet.php');
                break;
		}
		case 'listetrajet':
			{  include('vues/trajets/cherchetrajet.php');
			   break;
			}
		case 'affichelistetrajet': 
			{   $listetrajet = ModelTrajet::affichetrajet();
				include('vues/trajets/listetrajet.php');
				break;
			}
			case 'mesreservestrajets': 
				{   $listetrajet = ModelTrajet::mestrajetsreserves($_SESSION['id']);
					include('vues/trajets/listetrajet.php');
					break;
				}
		case 'affichelisteadmin': 
			{   $listetrajet = ModelTrajet::affichetrajet();
					include('vues/trajets/listeadmintrajet.php');
					break;
			}
		case 'affichetrajetchercher': 
			{   $listetrajet = ModelTrajet::cherchetrajet($_POST['trajet']);
					include('vues/trajets/listeadmintrajet.php');
					break;
			}
		case 'mestrajets':
			{   $mestrajets = ModelTrajet::affichemestrajets($_SESSION['id']);
				include('vues/trajets/mestrajets.php');
				break;
			}
		case 'supprimertrajet':
				{   
					ModelTrajet::supprimertrajet($_GET['supp']);
					//$mestrajets = ModelTrajet::affichemestrajets($_SESSION['id']);
					$listetrajet = ModelTrajet::affichetrajet();
					include('vues/trajets/listetrajet.php');
					break;
				}
		case 'modifiertrajet':
				{   /*ModelTrajet::modifiertrajet($_GET['supp']);
					$mestrajets = ModelTrajet::affichemestrajets($_SESSION['id']);*/
	                $untrajet = ModelTrajet::afficheletrajet($_GET['modif'],$_GET['user']);
					$_SESSION['user']= $_GET['user'];
					$_SESSION['modif']= $_GET['modif'];
					include('vues/trajets/modiftrajets.php');
					break;
				}
		case 'enregistrermodif':
				{   /*ModelTrajet::modifiertrajet($_GET['supp']);
						$mestrajets = ModelTrajet::affichemestrajets($_SESSION['id']);*/
						$mestrajets = ModelTrajet::modiftrajet($_POST['date'],$_POST['lieudep'],$_POST['lieuar'],$_POST['choivehicule'],$_POST['nombreplace'],$_POST['immatricu'],$_SESSION['modif'],$_SESSION['user']);
						/*$_SESSION['modif']= $_GET['modif'];*/
						$listetrajet = ModelTrajet::affichetrajet();
						include('vues/trajets/listetrajet.php');
						break;
				}
		case 'reservationcov':
				{   $cherchetrajet = ModelTrajet::chercherreserves($_GET['iduser'],$_GET['idcov'] );
					if (!isset($cherchetrajet)) 		
					{ModelTrajet::reservertrajets($_GET['iduser'],$_GET['idcov'],$_GET['idep'],$_GET['arr'], $_GET['cond'],$_GET['statut']);}
					$listetrajet = ModelTrajet::mestrajetsreserves($_SESSION['id']);	
					include('vues/trajets/listetrajet.php');
					break;
				}
		case 'demande':
				{    		$listedemandetrajet = ModelTrajet::demandetrajets($_SESSION['id']);
							include('vues/trajets/listedemandetrajet.php');
							break;
				}
		case 'affichelistepersonne':
					{    	$listepersonne = ModelTrajet::affichepersonne();
							include('vues/trajets/listepersonnes.php');
							break;
					}
		case 'choixcond':
				{   if ($_GET['choix']=="Accepter")
					{		
							ModelTrajet::nbreplaces( $_GET['place'],$_GET['cov']); 
					} 		
					ModelTrajet::choixtrajets($_GET['idreservation'], $_GET['choix']);
					$listedemandetrajet = ModelTrajet::demandetrajets($_SESSION['id']);
							include('vues/trajets/listedemandetrajet.php');
							break;
				}
	case 'affichelistepassager': 
		{
					$mespassagers = ModelTrajet::affichelistepassager($_SESSION['id']);
					include('vues/trajets/listepassagers.php');
					break;
		}
		
}?>