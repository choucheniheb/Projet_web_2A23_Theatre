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
<h1>gestion des tickets</h1>
<p>
Cette plate-forme vous permet de reserver vos tickets en ligne. <br>
</p>
</div>
</section>
<section class="two">
<div class="row">

    <div class="row-class">
        <h3>RESERVER TICKET:</h3>
        <p>Pour RESERVER VOTRE TICKET,cliquez sur le bouton ci-dessous.</p>
        <a href="../Views/ajoutertickets.php" class="hero-btn">commencer la demarche</a>
    </div>
    <div class="row-class">
        <h3>modifier:</h3>
        <p>pour modifier votre ticket, cliquez sur le bouton ci-dessous..</p>
        <a href="../Views/afficherListetickets.php" class="hero-btn">modifier</a>
    </div>
    <div class="row-class">
        <h3>afficher ticket:</h3>
        <p>Pour afficher votre ticket, cliquez sur le bouton ci-dessous..</p>
        <a href="../Views/afficherListetickets.php" class="hero-btn">Accéder</a>
    </div>
    
</div>
</section>

</body>
</html>