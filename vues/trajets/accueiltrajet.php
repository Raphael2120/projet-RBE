<body>
  
  <?php 
  if ($_SESSION['uv']=='véhiculé')
  {?>
<div class="container">
  <div class="text-center">
    <h1 id = "connex"class="text-white">Action à réaliser</h1>
  </div>
  <div class="container-fluid">
    <div class="card-columns text-center">
      <div class="card">
        <a href="index.php?ctl=trajet&action=ajouttrajet">
        <img class="card-img-top" src="https://images.unsplash.com/photo-1535025639604-9a804c092faa?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6cb0ceb620f241feb2f859e273634393&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Proposer un trajet..</h5>
          <p class="card-text">
            Dans cette section, vous pourrez proposer un trajet afin de satisfaire certains 
          </p>
          <p class="card-text"><small class="text-muted"><i class="fas fa-eye"></i>1000<i class="far fa-user"></i>admin<i class="fas fa-calendar-alt"></i>Jan 20, 2018</small></p>
      </div>
        </a>
      </div>
      <div class="card">
        <a href="index.php?ctl=trajet&action=ajoutvehicule">
        <img class="card-img-top" src="https://images.unsplash.com/photo-1535086181678-5a5c4d23aa7d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=34c86263bec2c8f74ceb74e9f4c5a5fc&auto=format&fit=crop&w=500&q=80" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Ajout d'un véhicule.</h5>
          <p class="card-text">Dans cette section, vous pourrez ajouter de nouveaux véhicules.</p>
          <p class="card-text"><small class="text-muted"><i class="fas fa-eye"></i>1000<i class="far fa-user"></i>admin<i class="fas fa-calendar-alt"></i>Jan 20, 2018</small></p>
        </div>
        </a>
      </div>
    </div>
  </div>
</div>
<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
  margin-left: 150px;
  border:60px;
  box-shadow : 10px 5px 5px black;
  &:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
    
  }
  a {
    color: initial;
    &:hover {
      text-decoration: initial;
    }
  }
  .text-muted i {
    margin: 0 10px;
  }
}

</style>
<?php } else{ ?>
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
						echo "<p class='card-text' style='height:25px';><a href='index.php?ctl=trajet&action=reservationcov&idcov=".$untrajet['idcov']."&cond=".$untrajet['iduscov']."&iduser=".$_SESSION['id']."&idep=".$untrajet['Lieudep']."&arr=".$untrajet['Lieuarr']."&statut=attente'>Réservation</a></p>";}
						else{echo "<p class='card-text' style='height:25px';> Vous ne pouvez plus réservé de places dans ce trajet.</p>";}
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
<?php } ?>
</body>
