<body>
<div class="container-contact100">
<!--<div class="container-contact100">!-->
<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="index.php?ctl=trajet&action=enregistrermodif" method="POST">
				<span class="contact100-form-title">
					Modifier un trajet
				</span>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Date de départ</span>
					<input class="input100" type="text" name="date" value = "<?php echo $untrajet['Datedep'];?>" placeholder="Entrer votre email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid text is required">
					<span class="label-input100">Lieu de départ</span>
					<input class="input100" type="text" name="lieudep" value = "<?php echo $untrajet['Lieudep'];?>" placeholder="Entrer votre lieu de départ">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid password is required">
					<span class="label-input100">Lieu d'arrivée</span>
					<input class="input100" type="text" name="lieuar" value = "<?php echo $untrajet['Lieuarr'];?>"placeholder="Entrer votre lieu d'arrivée">
					<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 input100-select">
					<span class="label-input100">Choix du véhicule</span>
					<div>
						<select class="selection-2" name="choivehicule">
						<?php 
							echo"<option value=".$untrajet['Choixvehicle'].">".$untrajet['Choixvehicle']."</option>";?>
						</select>
					</div>
					<span class='focus-input100'></span>
				</div>
				
				<div class="wrap-input100 validate-input" data-validate = "Valid number is required">
					<span class="label-input100">Nombre de place disponibles</span>
					<input class="input100" type="number" name="nombreplace" value = "<?php echo $untrajet['Nbplace'];?>" placeholder="Nombre de places">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid number is required">
					<span class="label-input100">Numéro d'immatriculation</span>
					<input class="input100" type="number" name="immatricu" value = "<?php echo $untrajet['immatricu'];?>" placeholder="Nombre de places">
					<span class="focus-input100"></span>
				</div>

				<!--<div class="wrap-input100 input100-select">
					<span class="label-input100">Needed Services</span>
					<div>
						<select class="selection-2" name="service">
							<option>Choose Services</option>
							<option>Online Store</option>
							<option>eCommerce Bussiness</option>
							<option>UI/UX Design</option>
							<option>Online Services</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Budget</span>
					<div>
						<select class="selection-2" name="budget">
							<option>Select Budget</option>
							<option>1500 $</option>
							<option>2000 $</option>
							<option>2500 $</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>!-->

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Enregistrer
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>



	
</body>