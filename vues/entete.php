<!DOCTYPE html>
<html lang="en">
<head>
	<title>Covoiturage</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<i class='fas fa-car'></i>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
   <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
   <link rel="stylesheet" type="text/css" href="css/styles.css" />
   <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<header>
  <div class= "container-fluid">
    <div class = "row">   
        <nav class= "col navbar navbar-expand-sm navbar-dark shadow"> 
           <!-- <a class="navbar-brand">
            <img src=/>
            </a>!-->
            <button class='navbar-toggler bg-dark' type='button' data-toggle='collapse' data-target='#navbarContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span></button>
            <div id ='navbarContent' class=' collapse navbar-collapse justify-content-center'>
            <?php if (!isset($_SESSION['Mail'])){?>
               <h1 id = "bienvenue" class="text-White sm"></h1> 
            <?php } else{?>

               <ul class='nav navbar-nav text-center'>
             <?php if (isset($_SESSION['Mail'])) 
                 { echo"<li class='nav-item'><a  id = 'connex' class='nav-link text-white' href='index.php?ctl=trajet&action=affichelistetrajet'><i class='fas fa-car'></i>Liste des trajets</a></li>";
                  echo"<li class='nav-item'><a  id = 'connex' class='nav-link text-white' href='index.php?ctl=trajet&action=mesreservestrajets'><i class='fas fa-car'></i>Mes réservations</a></li>";
                  if ($_SESSION['admin']!= 'Oui')
                   {
                     echo"<li class='nav-item'><a  id = 'connex' class='nav-link text-white' href='index.php?ctl=trajet&action=listetrajet'><i class='fas fa-search'></i>Chercher un trajet</a></li>";
                     if ($_SESSION['utilisateur']=='véhiculé')
                  { echo "<li class='nav-item dropdown'><a id = 'connex' class='nav-link dropdown-toggle text-dark' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' href='index.php?ctl=evenement&action=affichelisteadmin'><i class='fas fa-user-shield'></i>Gestion des trajets</a>
                     <div class='dropdown-menu'>
                          <a  id = 'connex' class='dropdown-item text-dark' href='index.php?ctl=trajet&action=demande'><i class='fa-solid fa-calendar-days'></i>Demande de réservation</a>
                          <a id = 'connex' class='dropdown-item text-dark' href='index.php?ctl=trajet&action=mestrajets'><i class='fas fa-road'></i>Mes trajets</a>
                          <a id = 'connex' class='dropdown-item text-dark' href='index.php?ctl=trajet&action=affichetrajet'><i class='fa-solid fa-sitemap'></i>Proposer un trajet</a>
                          <a id = 'connex'class='dropdown-item text-dark' href='index.php?ctl=trajet&action=affichelistepassager'><i class='fas fa-user-friends'></i>Liste des passagers</a>     
                     </div>
                   </li>";
                     }
                  }
                  echo "<li class='nav-item'><a id = 'connex' class='nav-link text-white' href='index.php?ctl=login&action=deconnect'><i class='fa fa-sign-in' aria-hidden='true'></i>Déconnexion</a></li>";
                  echo"<li class='nav-item'><a  id = 'connex' class='nav-link text-white' href='index.php?ctl=trajet&action=listetrajet'><i class='fas fa-user'></i>".$_SESSION['Prenom']." ".$_SESSION['utilisateur']."</a></li>";  
                }
                    if(isset($_SESSION['admin']) && $_SESSION['admin'] =='Oui' )
                      {echo "<li class='nav-item dropdown'><a id = 'connex' class='nav-link dropdown-toggle text-dark' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' href='index.php?ctl=evenement&action=affichelisteadmin'><i class='fas fa-user-shield'></i> Administration</a>
                                <div class='dropdown-menu'>
                                     <a  id = 'connex'class='dropdown-item text-dark' href='index.php?ctl=trajet&action=affichelistetrajet'>Gestion trajet</a>
                                     <a id = 'connex'class='dropdown-item text-dark' href='index.php?ctl=trajet&action=affichelistepersonne'><i class='fas fa-user-friends'></i>Liste des véhiculés et passagers.</a>               
                                </div>
                              </li>";
                      } /*if ($_SESSION['admin'] == 0)
                      {echo "<li class='nav-item'><a class='nav-link text-white' href='index.php?ctl=eleve&action=nbreinscrip&id=".$_SESSION['id']."'><i class='fas fa-heart'></i>Mes Conférences</a></li>";}
                    /*echo "<li class='nav-item'><a class='nav-link text-dark' href='Index.php?ctl=reserv&action=listconf'>Mes conférences<b><SPAN style='color: red'>($nb)</span></b></a></li>";*/
                     
                     ?></ul><?php }?></div></nav></div></div>
</header>