<?php
	include '../Controller/AdherentC.php';
	$adherentC=new AdherentC();
	$listeAdherents=$adherentC->afficheradherents(); 
?>
<html>
	<head>
		<link rel="stylesheet" href="../css/display.css">
		 <link rel="stylesheet" href="../css/all.min.css">
	</head>
	<body>
	  
		<center><h1 id="head">Liste des Reponses</h1></center>
		<table border="1" class="content">
			<thead>
			<tr id="cltr" >
				<th>Numero reponse</th>
				<th>reponse</th>
				<th>comment</th>
				<th>Date De Réponse</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			</thead>
			<?php
				foreach($listeAdherents as $adherent){
			?>
			 <tbody>
			<tr>
				<td><?php echo $adherent['NumAdherent']; ?></td>
				<td><?php echo $adherent['rep']; ?></td>
				<td><?php echo $adherent['comment']; ?></td>
				<td><?php echo $adherent['DateInscription']; ?></td>
				<td>
					<form method="POST" action="modifierReponse.php">
						<input type="submit" name="Modifier" value="Modifier"   class="btn" >
						<input type="hidden" value=<?PHP echo $adherent['NumAdherent']; ?> name="NumAdherent">
					</form>
				</td>
				<td><i id="ho" class=" fas fa-trash"></i>
					<a  id="dlt" href="supprimerReponse.php?NumAdherent=<?php echo $adherent['NumAdherent']; ?>">Supprimer</a>
				</td>

			</tr>
			 <tbody>
			<?php
				}
			?>
		</table>
	</body>
</html>
