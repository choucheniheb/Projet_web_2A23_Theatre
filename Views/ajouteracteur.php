<?php
    include_once '../Model/acteur.php';
    include_once '../Controller/acteurC.php';

    $error = "";

    // create acteur
    $acteur = null;

    // create an instance of the controller
    $acteurC = new acteurC();
    if (
        isset($_POST["id_acteur"]) &&
		isset($_POST["nom_acteur"]) &&		
        isset($_POST["prenom_acteur"]) &&
		isset($_POST["adresse_acteur"]) && 
        isset($_POST["categorie"])
    ) {
        if (
            !empty($_POST["id_acteur"]) && 
			!empty($_POST['nom_acteur']) &&
            !empty($_POST["prenom_acteur"]) && 
			!empty($_POST["adresse_acteur"]) && 
            !empty($_POST["categorie"])
        ) {
            $acteur = new acteur(
                $_POST['id_acteur'],
				$_POST['nom_acteur'],
                $_POST['prenom_acteur'], 
				$_POST['adresse_acteur'],
                $_POST['categorie']
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeacteur.php">Retour à la liste des acteurs</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id_acteur">id acteur:
                        </label>
                    </td>
                    <td><input type="text" name="id_acteur" id="id_acteur" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nom_acteur">Nom acteur:
                        </label>
                    </td>
                    <td><input type="text" name="nom_acteur" id="nom_acteur" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom_acteur">Prenom acteur:
                        </label>
                    </td>
                    <td><input type="text" name="prenom_acteur" id="prenom_acteur" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="adresse_acteur">Adresse acteur:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="adresse_acteur" id="adresse_acteur">
                    </td>
                </tr>
                <tr>
                    <td>
                        categorie:<label for="categorie">
                        </label>
                    </td>
                    <td>
                        <select size="1" name="categorie" multiple>
						<option value="comedien">comedien</option>
						<option value="dramatique">dramatique</option>
						</select>
                    </td>
                </tr>         
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>