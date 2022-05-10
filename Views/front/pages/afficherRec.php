<?php

include '../../../Controller/reclamationC.php';
	$reclam=new reclamC();
	$listeReclamation=$reclam->Afficher();

?>
<html lang="en">
  <head>
  	<title>afficher les réclamations</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../../../css/affichage.css">
	<link rel="stylesheet" href="../../../css/affiche.css">
     <link rel="stylesheet" href="../../../css/all.min.css">
	</head>
	<body>
		<section class="secone">
    <nav>
        <i class="fas fa-theater-masks fa-3x" id="ic"></i>
        <h2 id="head">theatre24</h2>
        <div class="nav-links">
            <ul>
                
                 <li><a href="soumettre.php">retour a la page d'acceuil</a></li>
            </ul>
        </div>
    </nav>
</section>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<h2 class="h5 mb-4 text-center">liste de mes réclamations</h2>
					<div class="table-wrap">

						<table class="table myaccordion table-hover" id="accordion">

						  <thead>
						    <tr>
						      <th>numero reclamation</th>
						      <th>type reclamation</th>
						      <th>date reclamation</th>
						      <th>Texte de reclamation</th>
							  <th>modifier</th>
							  <th>supprimer</th>
						    
						    </tr>
						  </thead>

					  
			<?php
				foreach($listeReclamation as $adherent){
			?>
			

						  <tbody>

						    <tr data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						      
						      <td><?php echo $adherent['numrec']; ?></td>
						      <td><?php echo $adherent['typerec']; ?></td>
						      <td> <?php echo $adherent['daterec']; ?> </td>
							  <td>
						      	<i class="fa" aria-hidden="true"></i>
				        	</td>
							<td><form method="POST" action="modifierRec.php">
						
						<input type="submit" name="Modifier" value="Modifier" class="btn">
						<input type="hidden" value=<?PHP echo $adherent['numrec']; ?> name="numrec">
					</form></td>


                             <td></i>
					<a id="dlt" href="SupprimerRec.php?numrec=<?php echo $adherent['numrec']; ?>">Supprimer</a></td>
 

						    </tr>

			                  <tr>
						    	<td colspan="6" id="collapseOne" class="collapse show acc" data-parent="#accordion">
						    	<p>  <?php echo $adherent['texte']; ?>  </p>
						    	</td>
						    </tr>
							
						  </tbody>
                            <?php
				}
			?>
						  
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>






	<script src="../../../js/jquery.min.js"></script>
  <script src="../../../js/popper.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>
  <script src="../../../js/main.js"></script>

	</body>
</html>

