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
                            <th>Mail</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Matricule</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                        if (isset($listepersonne))
                        {
                        foreach($listepersonne as $unepersonne)
                        {
                        echo "<tr>
                              <td>".$unepersonne['Mail']."</td>
                              <td>".$unepersonne['Nom']."</td>
                              <td>".$unepersonne['Prenom']."</td>
                              <td>".$unepersonne['Mat']."</td>
                              <td>".$unepersonne['utilisateurv']."</td>
                             </tr>";
                        } }?>
                    </tbody>
                </table>   
		</div>
	</div>
</div>
<script type = "text/javascript" src="js/passagers.js"></script>
</body>