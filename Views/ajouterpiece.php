<?php
    include_once '../Model/piece.php';
    include_once '../Controller/pieceC.php';

    $error = "";

    // create acteur
    $piece = null;
    
    // create an instance of the controller
    $pieceC = new pieceC();
   if (
        isset($_POST["num_piece"]) &&
		isset($_POST["nom_piece"]) &&		
        isset($_POST["id_acteur"]) &&
		isset($_POST["realisateur"]) && 
        isset($_POST["categorie_piece"]) &&
        isset($_POST["date_creation"])

    ) {
        if (
            !empty($_POST["num_piece"]) &&
            !empty($_POST["id_acteur"]) &&  
			!empty($_POST["nom_piece"])&&
			!empty($_POST["realisateur"]) && 
            !empty($_POST["categorie_piece"]) &&
            !empty($_POST["date_creation"])
        ) {
            $piece = new piece(
                $_POST['num_piece'],
                $_POST['id_acteur'], 
				$_POST['nom_piece'],
				$_POST['realisateur'],
                $_POST['categorie_piece'],
                $_POST['date_creation']
            );
            $pieceC->ajouterpiece($piece);
            header('Location:afficherListepiece.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/soumettre.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <title>Document</title>
</head>
<body>
<section class="secone">
    <nav>
        <i class="fas fa-theater-masks fa-3x" id="ic"></i>
        <h2 id="head">theatre24</h2>
        <div class="nav-links">
            <ul>
                <li><i id="ho" class=" fas fa-home"></i><a href="../Views/index.php">Acceuil</a></li>
                <li><i id="dc" class=" fas fa-file"></i><a href="../Views/suivie.php">suivi</a></li>
            </ul>
        </div>
    </nav>
</section>

<section class="secthree">
    <h1 id="r">ajouter le piece:</h1>
    <div class="test-form">
<h1 id="re">Informations de piece:</h1>


<form action="" method="POST">
    <label for="num_piece">numero de piece:</label>
    <input type="text" name="num_piece" id="num_piece" maxlength="20">
<label for="nom_piece">Nom de piece:</label>
<input type="text" name="nom_piece" id="nom_piece"><br>
<label for="realisateur"> nom de realisateur:</label>
<input type="text" name="realisateur" id="realisateur"><br>
<label for="id_acteur">identifiant acteur:</label>
<input type="text" name="id_acteur" id="id_acteur"><br>
<label for="date_creation">date creation:</label>
<input type="date" name="date_creation" id="date_creation"><br>
categorie de piece:<label for="categorie_piece">
</label>
<select size="1" name="categorie_piece" multiple>
<option value="comedien">comedien</option>
<option value="dramatique">dramatique</option>
</select><br>

<button type="submit" value="Envoyer">Envoyer</button>
</form>
</div>
</section>
</body>
</html>