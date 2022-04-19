<?php
?>

<html lang="en">
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
<h1>piece de théatre</h1>
<p>
Cette plate-forme vous permet de afficher toutes les informations de piece en ligne. <br>
</p>
</div>
</section>
<section class="two">
<div class="row">

    <div class="row-class">
        <h3>SOUMETTRE VOTRE DOSSIER:</h3>
        <p>Pour soumettre une demande de travaille,cliquez sur le bouton ci-dessous.</p>
        <a href="../Views/ajouteracteur.php" class="hero-btn">Accéder</a>
    </div>
    <div class="row-class">
        <h3>déja deposé:</h3>
        <p>si vous avez déja deposé votre dossier et tu veux le modifier, cliquez sur le bouton ci-dessous..</p>
        <a href="../Views/afficherListeacteur.php" class="hero-btn">modifier</a>
    </div>
    <div class="row-class">
        <h3>NOTRE ACTEUR:</h3>
        <p>Pour afficher l'acteur de notre theatre, cliquez sur le bouton ci-dessous..</p>
        <a href="../Views/afficherListeacteur.php" class="hero-btn">Accéder</a>
    </div>
    
</div>
</section>

</body>
</html>