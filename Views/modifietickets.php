<?php
    include_once '../Model/tickets.php';
    include_once '../Controller/ticketsc.php';

    $error = "";

    // create ticket
    $tickets = null;

    // create an instance of the controller
    $ticketsc = new ticketsc();
    if (
        isset($_POST["num"]) &&
		isset($_POST["numplace"]) &&		
        isset($_POST["piece"]) &&
		isset($_POST["prix"]) && 
        isset($_POST["duree"]) && 
        isset($_POST["datee"])
    ) {
        if (
            !empty($_POST["num"]) && 
			!empty($_POST['numplace']) &&
            !empty($_POST["piece"]) && 
			!empty($_POST["prix"]) && 
            !empty($_POST["duree"]) && 
            !empty($_POST["datee"])
        ) {
            $tickets= new tickets(
                $_POST['num'],
				$_POST['numplace'],
                $_POST['piece'], 
				$_POST['prix'],
                $_POST['duree'],
                $_POST['datee']
            );
            $ticketsc->modifiertickets($tickets,$_POST["num"]);
            header('Location:afficherListetickets.php');
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
        <button><a href="afficherListetickets.php">Retour à la liste des tickets</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['num'])){
				$tickets = $ticketsc->recuperertickets($_POST['num']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="num">Numéro tickets:
                        </label>
                    </td>
                    <td><input type="text" name="num" id="num" value="<?php echo $tickets['num']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="numplace">numplace:
                        </label>
                    </td>
                    <td><input type="text" name="numplace" id="numplace" value="<?php echo $tickets['Nom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="piece">piece:
                        </label>
                    </td>
                    <td><input type="text" name="piece" id="piece" value="<?php echo $tickets['Piece']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prix">prix:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="prix" value="<?php echo $tickets['prix']; ?>" id="prix">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="duree">duree de spectale:
                        </label>
                    </td>
                    <td>
                        <input type="duree" name="duree" id="duree" value="<?php echo $tickets['duree']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="datee">Date du spectacle:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="datee" id="datee" value="<?php echo $tickets['datee']; ?>">
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>