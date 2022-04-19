<?php
    include_once '../Model/acteur.php';
    include_once '../Controller/acteurC.php';
    include_once '../Model/login.php';

    $error = "";

    // create acteur
    $acteur = null;
    $login = null;


    // create an instance of the controller
    $acteurC = new acteurC();
    if (
        isset($_POST["id_acteur"]) &&
		isset($_POST["nom_acteur"]) &&		
        isset($_POST["prenom_acteur"]) &&
		isset($_POST["adresse_acteur"]) && 
        isset($_POST["categorie"]) &&
        isset($_POST["date_naissance"])

    ) {
        if (
            !empty($_POST["id_acteur"]) && 
			!empty($_POST['nom_acteur']) &&
            !empty($_POST["prenom_acteur"]) && 
			!empty($_POST["adresse_acteur"]) && 
            !empty($_POST["categorie"]) &&
            !empty($_POST["date_naissance"])
        ) {
            $acteur = new acteur(
                $_POST['id_acteur'],
				$_POST['nom_acteur'],
                $_POST['prenom_acteur'], 
				$_POST['adresse_acteur'],
                $_POST['categorie'],
                $_POST['date_naissance']
            );
            $acteurC->ajouteracteur($acteur);
            header('Location:afficherListeacteur.php');
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
    <h1 id="r">deposer votre dossier:</h1>
    <div class="test-form">
<h1 id="re">Informations de l'acteur:</h1>

<?php
			//if (isset($_POST['id_login'])) 
				$login = $acteurC->recupererlogin(1);
				
?>

<form action="" method="POST">
    <label for="id_acteur">id acteur:</label>
    <input type="text" name="id_acteur" id="id_acteur" maxlength="20">
<label for="nom_acteur">Nom acteur:</label>
<input type="text" name="nom_acteur" id="nom_acteur" value="<?php echo $login['nom']; ?>"><br>
<label for="prenom_acteur"> Prenom:</label>
<input type="text" name="prenom_acteur" id="prenom_acteur" value="<?php echo $login['prenom']; ?>"><br>
<label for="adresse_acteur">adresse:</label>
<input type="text" name="adresse_acteur" id="adresse_acteur" value="<?php echo $login['adresse']; ?>"><br>
<label for="date_naissancer">date_naissance:</label>
<input type="date" name="date_naissance" id="date_naissance" value="<?php echo $login['date_naissance']; ?>"><br>
categorie:<label for="categorie">
</label>
<select size="1" name="categorie" multiple>
<option value="comedien">comedien</option>
<option value="dramatique">dramatique</option>
</select><br>
<button type="submit" value="Envoyer">Envoyer</button>
</form>
</div>
</section>
</body>
</html>