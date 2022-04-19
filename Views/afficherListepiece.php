<?php
	include '../Controller/pieceC.php';
	$pieceC=new pieceC();
	$listepiece=$pieceC->afficherListepiece(); 
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
<h1>liste des piece</h1>
</div>
</section>


	    <button><a href="ajouterpiece.php">Ajouter un piece</a></button>
		<table border="1" align="center">
			<tr>
				<th>numero piece</th>
				<th>Nom piecer</th>
				<th>identifiant acteur</th>
				<th>realisateur</th>
				<th>categorie de piece</th>
				<th>date de creation</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listepiece as $piece){
			?>
			<tr>
				<td><?php echo $piece['num_piece']; ?></td>
				<td><?php echo $piece['nom_piece']; ?></td>
				<td><?php echo $piece['id_acteur']; ?></td>
				<td><?php echo $piece['realisateur']; ?></td>
				<td><?php echo $piece['categorie_piece']; ?></td>
				<td><?php echo $piece['date_creation']; ?></td>
				<td>
					<form method="POST" action="modifierpiece.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $piece['num_piece']; ?> name="num_piece">
					</form>
				</td>
				<td>
					<a href="supprimerpiece.php?num_piece=<?php echo $piece['num_piece']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
