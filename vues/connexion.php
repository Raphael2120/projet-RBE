<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="index.php?ctl=login&action=connect" method="POST">
				<span id = "Bonjour" class="contact100-form-title">
					Veuillez saisir votre identifiant.
				</span>

				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<span id = "connex" class="label-input100">Email</span>
					<input class="input100" type="text" name="username" autocomplete ="off" placeholder="Entrer votre email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid password is required">
					<span id = "connex" class="label-input100">Mot de passe</span>
					<input class="input100" type="password" name="password" autocomplete ="off" placeholder="Entrer votre mot de passe">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span id = "connex" class="label-input100">Choisis ton type</span>
					<div>
						<select id = "connex" class="selection-2" name="u">
							<option  value="véhiculé">Véhiculé</option>
							<option value ="Passager">Passager</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				<!--
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
							<span id="textconnex">
								Connexion
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script type="text/javascript" src = "js/connect.js"></script>
</body>