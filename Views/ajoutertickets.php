<?php
    include_once '../Model/tickets.php';
    include_once '../Controller/ticketsc.php';

    $error = "";

    // create acteur
    $tickets = null;

    // create an instance of the controller
    $ticketsc = new ticketsc();
    if (
        isset($_POST["num_ticket"]) &&
		isset($_POST["cin"]) &&		
        isset($_POST["nom"]) &&
		isset($_POST["prenom"]) && 
        isset($_POST["piece"]) &&
        isset($_POST["datee"])
    ) {
        if (
            !empty($_POST["num_ticket"]) &&
		    !empty($_POST["cin"]) &&		
            !empty($_POST["nom"]) &&
		    !empty($_POST["prenom"]) && 
            !empty($_POST["piece"]) &&
            !empty($_POST["datee"])
        ) {
            $tickets = new tickets(
                $_POST['num_ticket'],
				$_POST['cin'],
                $_POST['piece'], 
				$_POST['nom'],
                $_POST['prenom'],
                $_POST['datee']
            );
            $ticketsc->ajoutertickets($tickets);
            header('Location:afficherListetickets.php');
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
    <h1 id="r">reserver votre tickets:</h1>
    <div class="test-form">
<h1 id="re">Informations de client:</h1>


<form action="" method="POST">
    <label for="num_ticket">num_ticket:</label>
    <input type="text" name="num_ticket" id="num_ticket" maxlength="20">
<label for="nom">Nom:</label>
<input type="text" name="nom" id="nom"><br>
<label for="prenom"> Prenom:</label>
<input type="text" name="prenom" id="prenom"><br>
<label for="cin">cin:</label>
<input type="text" name="cin" id="cin"><br>
<label for="piece">piece:</label>
<input type="piece" name="piece" id="piece"><br>
<label for="datee">date:</label>
<input type="date" name="datee" id="datee"><br>

<button type="submit" value="Envoyer">Envoyer</button>
</form>
</div>
</section>
</body>
</html>