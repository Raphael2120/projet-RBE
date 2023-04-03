<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card mt-5">
			<div class="card-header">
				<h3>Chercher un trajet</h3>
			</div>
			<div class="card-body">
				<form action="index.php?ctl=trajet&action=affichetrajetchercher" method="POST">
				<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-location"></i></span>
						</div>
						<input type="text" name="trajet" class="form-control" required class="form__input">
						
					</div>
					
					
					<div class="input-group form-group">
					<input type="submit" value="Enregistrer" class="w-100 btn float-right mt-4 login_btn ">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>