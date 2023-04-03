<body>
<div class="container">
<div class="row mb-5">
<?php foreach($mestrajets as $montrajet) { ?>
			<div class="col-md-4">
				<div class="card " style="margin-top:20px;">
					<div class="card-body">
						<?php echo "<h5 class='card-title'> Date de départ : ".$montrajet['Datedep']."</h5>";
						echo "<p class='card-text' style='height:25px';> Lieu de départ : ".$montrajet['Lieudep']."</p>";
						echo "<p class='card-text' style='height:25px';> Lieu d'arrivée : ".$montrajet['Lieuarr']."</p>";
                        echo "<p class='card-text' style='height:25px';> Véhicule : ".$montrajet['Choixvehicle']."</p>";
						echo "<p class='card-text' style='height:25px';> Véhicule : ".$montrajet['immatricu']."</p>";
						echo "<p class='card-text' style='height:25px';> Nombre de places disponibles : ".$montrajet['Nbplace']."</p>";
						echo "<p class='card-text' style='height:25px;margin-left:-15px;';><a class='nav-link text-dark' href='index.php?ctl=trajet&action=supprimertrajet&supp=".$montrajet['idcov']."'>Supprimer</a></p>";
                ?>
					</div>
				</div>
			</div>
<?php } ?>
<div>
</div>
</body>