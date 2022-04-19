<?php
	include '../Controller/acteurC.php';
	$acteurC=new acteurC();
	$listeacteur=$acteurC->afficherListeacteur(); 
?>
<html>
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Reclamation</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
	<section class="header">
<nav>
    <!--
    <img src="/assests/aaa.png" alt="">
    -->

        <i class="fas fa-theater-masks fa-3x" id="ic"></i><a href="#">Théatre24</a> 
<div class="nav-links">
    <ul>
        <li> <a href=""><i class=" fas fa-home"> </i> Accueil</a> </li>
        <li> <a href=""><i class="fas fa-blog"> </i>blog </a></li>
        <li> <a href=""><i class="fas fa-theater-masks"> </i>piéce </a></li>
        <li> <a href=""><i class="fas fa-user"> </i>utilisateur</a></li>
       <!-- <li> <a href=""> <i class="fas fa-align-right"> </i>Module</a></li>-->
    </ul>
</div>
</nav>
<div class="text-box">
<h1>liste des acteur</h1>
</div>
</section>
	    <button><a href="ajouteracteur.php">Ajouter un acteur</a></button>
		<center><h1>Liste des acteur</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id_acteur</th>
				<th>Nom_acteur</th>
				<th>Prenom_acteur</th>
				<th>Adresse_acteur</th>
				<th>categorie</th>
				<th>date naissance</th>
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
				<td><?php echo $acteur['date_naissance']; ?></td>
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
