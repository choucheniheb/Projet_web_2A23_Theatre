<?php
	include '../Controller/acteurC.php';
	$acteurC=new acteurC();
	$listeacteur=$acteurC->afficherListeacteur(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouteracteur.php">Ajouter un acteur</a></button>
		<center><h1>Liste des acteur</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id_acteur</th>
				<th>Nom_acteur</th>
				<th>Prenom_acteur</th>
				<th>Adresse_acteur</th>
				<th>categorie</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeacteur as $acteur){
			?>
			<tr>
				<td><?php echo $acteur['id_acteur']; ?></td>
				<td><?php echo $acteur['nom_acteur']; ?></td>
				<td><?php echo $acteur['prenom_acteur']; ?></td>
				<td><?php echo $acteur['adress_acteur']; ?></td>
				<td><?php echo $acteur['categorie']; ?></td>
				<td>
					<form method="POST" action="modifieracteur.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $acteur['id_acteur']; ?> name="id_acteur">
					</form>
				</td>
				<td>
					<a href="supprimeracteur.php?id_acteur=<?php echo $acteur['id_acteur']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
