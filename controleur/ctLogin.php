<?php require_once 'modele/ModelUser.php';
$action = $_GET['action'];
switch($action){
		//CONNEXION
		case 'connect':
		{   
			$login = $_POST['username'];
			$mdp = $_POST['password'];
			if (filter_var($login,FILTER_VALIDATE_EMAIL))
			{
			$connection = ModelUser::connect($login,$mdp) ;
			
			if (is_array($connection)) {
				$_SESSION['Mail'] = $connection['Mail'];
				$_SESSION['id'] = $connection['id'];
				$_SESSION['Nom'] = $connection['Nom'];
				$_SESSION['Prenom'] = $connection['Prenom'];
                $_SESSION['uv'] = $connection['utilisateurv'];
				$_SESSION['admin'] = $connection['admin'];
				if (isset($_POST['u']))
					{ ModelUser::categ($_POST['u'],$_SESSION['id']);
			  			$connection = ModelUser::connect($login,$mdp) ;
						$_SESSION['utilisateur'] = $connection['utilisateurv'];
					}
			    
				header('Location: index.php?ctl=trajet&action=affichetrajet');
			}}else {
				header('Location: index.php?err=erreur de login');
			}
		break;
		}

		//DECONNECT
		case 'deconnect':
		{
			unset($_SESSION);
			session_destroy();
			header('Location: index.php');
		break;
		}
}


?>