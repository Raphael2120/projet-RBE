<body>
<div class="container">
<div class="row mb-5">
<?php foreach($listedemandetrajet as $untrajet) { ?>
			<div class="col-md-4">
				<div class="card " style="margin-top:20px;">
					<div class="card-body">
						<?php echo "<h5 class='card-title'> Date de départ : ".$untrajet['Datedep']."</h5>";
						echo "<p class='card-text' style='height:25px';> Lieu de départ : ".$untrajet['Lieudep']."</p>";
						echo "<p class='card-text' style='height:25px';> Lieu d'arrivée : ".$untrajet['Lieuarr']."</p>";
						echo "<p class='card-text' style='height:25px';> Nombre de places disponibles : ".$untrajet['Nbplace']."</p>";
						echo "<p class='card-text' style='height:25px';> N°IMMATRICULATION : ".$untrajet['immatricu']."</p>";
						echo "<p class='card-text' style='height:25px';> Véhicule : ".$untrajet['Choixvehicle']."</p>";
						if ($_SESSION['id'] == $untrajet['idcond'] && $untrajet['Choix']=="attente")
						{echo "<p class='card-text' style='height:25px';><a href='index.php?ctl=trajet&action=choixcond&choix=Accepter&idreservation=".$untrajet['id']."&cov=".$untrajet['idcov']."&place=".$untrajet['Nbplace']."'>Accepter</a>  <a href='index.php?ctl=trajet&action=choixcond&choix=Refus&idreservation=".$untrajet['id']."'>Refuser</a></p>";}
						else
						{echo "<h5 class='card-title'> Statut : ".$untrajet['Choix']."</h5>";}
						if ($_SESSION['id']==1)
						{
						echo "<p class='card-text' style='height:25px;margin-left:-15px;';><a class='nav-link text-dark' href='index.php?ctl=trajet&action=supprimertrajet&supp=".$untrajet['idcov']."'>Supprimer</a></p>";
						echo "<p class='card-text' style='height:25px;margin-left:-15px;';><a class='nav-link text-dark' href='index.php?ctl=trajet&action=modifiertrajet&modif=".$untrajet['idcov']."'>Modifier</a></p>";
						}		
                ?>
					</div>
				</div>
			</div>
<?php } ?>
<div>
</div>
</body>



