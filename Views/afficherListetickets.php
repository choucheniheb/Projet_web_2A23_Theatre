<?php
	include '../Controller/ticketsc.php';
	$ticketsc=new ticketsc();
	$listetickets=$ticketsc->affichertickets(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajoutertickets.php">Ajouter un ticket</a></button>
		<center><h1>Liste des tickets</h1></center>
		<table border="1" align="center">
			<tr>
				<th>numero ticket</th>
				<th>cin</th>
				<th>nom</th>
				<th>prenom</th>
				<th>piece</th>
				<th>date</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listetickets as $tickets){
			?>
			<tr>
				<td><?php echo $tickets['num_ticket']; ?></td>
				<td><?php echo $tickets['cin']; ?></td>
				<td><?php echo $tickets['nom']; ?></td>
				<td><?php echo $tickets['prenom']; ?></td>
				<td><?php echo $tickets['piece']; ?></td>
				<td><?php echo $tickets['datee']; ?></td>
				<td>
					<form method="POST" action="modifiertickets.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $tickets['num_ticket']; ?> name="num_ticket">
					</form>
				</td>
				<td>
					<a href="supprimertickets.php?num_ticket=<?php echo $tickets['num_ticket']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
