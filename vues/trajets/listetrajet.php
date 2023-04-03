<body>
<div class="container">
<div class="row mb-5">
<?php foreach($listetrajet as $untrajet) { ?>
			<div class="col-md-4">
				<div class="card " style="margin-top:20px;">
					<div class="card-body">
						<?php echo "<h5 class='card-title'> Date de départ : ".$untrajet['Datedep']."</h5>";
						echo "<p class='card-text' style='height:25px';> Lieu de départ : ".$untrajet['Lieudep']."</p>";
						echo "<p class='card-text' style='height:25px';> Lieu d'arrivée : ".$untrajet['Lieuarr']."</p>";
						if ($untrajet['Nbplace'] > 0){echo "<p class='card-text' style='height:25px';> Nombre de places disponibles : ".$untrajet['Nbplace']."</p>";}
						else{
							echo "<p class='card-text' style='height:25px';> Il n'y a plus de places disponibles.</p>";
						}
						echo "<p class='card-text' style='height:25px';> N°IMMATRICULATION : ".$untrajet['immatricu']."</p>";
						echo "<p class='card-text' style='height:25px';> Véhicule : ".$untrajet['Choixvehicle']."</p>";
						if ($untrajet['Nbplace'] > 0){
							if(isset($untrajet['Choix']))
							{
							if($untrajet['Choix']=='attente'OR $untrajet['Choix']=='Accepter')
							{echo "<p class='card-text' style='height:25px';> Vous avez déjà réservé.</p>";
								echo "<p class='card-text' style='height:25px';> Statut :".$untrajet['Choix']."</p>";}
							}
						else{echo "<p class='card-text' style='height:25px';><a href='index.php?ctl=trajet&action=reservationcov&idcov=".$untrajet['idcov']."&cond=".$untrajet['iduscov']."&iduser=".$_SESSION['id']."&idep=".$untrajet['Lieudep']."&arr=".$untrajet['Lieuarr']."&statut=attente'>Réservation</a></p>";}}
						else {echo "<p class='card-text' style='height:25px';> Vous ne pouvez plus réservé de places dans ce trajet.</p>";}
						if ($_SESSION['id']==1)
						{
						echo "<p class='card-text' style='height:25px;margin-left:-15px;';><a class='nav-link text-dark' href='index.php?ctl=trajet&action=supprimertrajet&supp=".$untrajet['idcov']."'>Supprimer</a></p>";
						echo "<p class='card-text' style='height:25px;margin-left:-15px;';><a class='nav-link text-dark' href='index.php?ctl=trajet&action=modifiertrajet&modif=".$untrajet['idcov']."&user=".$untrajet['iduscov']."'>Modifier</a></p>";
						}		
                ?>
					</div>
				</div>
			</div>
<?php } ?>
<div>
</div>
</body>



