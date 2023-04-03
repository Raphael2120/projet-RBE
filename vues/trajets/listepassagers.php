
<body>
<div class="container">
	<div class="row">
        <div class="col-md-3">
            <form action="#" method="get">
                <div class="input-group">
                    <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                    <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
		<div class="col-md-9">
    	 <table class="table table-list-search" style = "background-color : white;">
                    <thead>
                        <tr>
                            <th>Date de départ</th>
                            <th>Mail</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Lieu de départ</th>
                            <th>Lieu d'arrivée</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                        if (isset($mespassagers))
                        {
                        foreach($mespassagers as $unpassager)
                        {
                        echo "<tr>
                              <td>".$unpassager['Datedep']."</td>
                              <td>".$unpassager['Mail']."</td>
                              <td>".$unpassager['Nom']."</td>
                              <td>".$unpassager['Prenom']."</td>
                              <td>".$unpassager['Lieudep']."</td>
                              <td>".$unpassager['Lieuarr']."</td>
                             </tr>";
                        } }?>
                    </tbody>
                </table>   
		</div>
	</div>
</div>
<script type = "text/javascript" src="js/passagers.js"></script>
</body>