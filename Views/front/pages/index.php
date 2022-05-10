<?php
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/all.min.css">
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
<h1>Réclamation en ligne</h1>
<p>
Cette plate-forme vous permet de soumettre vos réclamations en ligne. <br>
Vous pouvez soumettre une nouvelle réclamation ou suivre une réclamation déjà soumise.
</p>
</div>
</section>
<section class="two">
<div class="row">

    <div class="row-class">
        <h3>SOUMETTRE UNE RÉCLAMATION:</h3>
        <p>Pour soumettre une nouvelle réclamation,cliquez sur le bouton ci-dessous.</p>
        <a href="../Views/front/soumettre.php" class="hero-btn">commencer la demarche</a>
    </div>

    <div class="row-class">
        <h3>SUIVRE MA RÉCLAMATION:</h3>
        <p>Pour suivre l'état d'avancement d'une précédente réclamation, cliquez sur le bouton ci-dessous..</p>
        <a href="../Views/suivie.php" class="hero-btn">Accéder</a>
    </div>
    
</div>
</section>
</body>
</html>