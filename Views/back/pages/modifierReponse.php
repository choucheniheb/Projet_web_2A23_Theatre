<?php
    include_once '../../../Model/Adherent.php';
    include_once '../../../Controller/AdherentC.php';

    $error = "";

    // create adherent
    $adherent = null;

    // create an instance of the controller
    $adherentC = new AdherentC();
    if (
        isset($_POST["numadherent"]) &&
		isset($_POST["rep"]) &&		
        isset($_POST["comment"]) && 
        isset($_POST["dateins"])
    ) {
        if (
            !empty($_POST["numadherent"]) && 
			!empty($_POST['rep']) && 
            !empty($_POST["comment"]) && 
            !empty($_POST["dateins"])
        ) {
            $adherent = new Adherent(
                $_POST['numadherent'],
				$_POST['rep'],
                $_POST['comment'],
                $_POST['dateins']
            );
            $adherentC->modifieradherent($adherent, $_POST["numadherent"]);
            header('Location:listReponse.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../../css/modifier.css">
    <title>Modifier Reponse</title>
    
</head>
    <body>
        <div class="heading">
        <button class="hero-btn"><a id="lin" href="listReponse.php">Retour à la liste des Reponses</a></button> 
         <h1> Modifier une reponse </h1>
        </div>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['NumAdherent'])){
				$adherent = $adherentC->recupereradherent($_POST['NumAdherent']);
				
		?>

        <!----------------- FORM ---------------->
             <div class="down">
            <div class="test-form">
        <form action="" method="POST">
            
               
   <label for="numadherent">Numéro Reclamation:  <label> 

  <input type="text" name="numadherent" id="numadherent" value="<?php echo $adherent['NumAdherent']; ?>" maxlength="20">

  

  <label for="rep">reponse:  </label>
  <input type="text" name="rep" id="rep" value="<?php echo $adherent['rep']; ?>" maxlength="20">
        
  <label for="comment">commentaire:  </label>              
  <input type="comment" name="comment" id="comment" value="<?php echo $adherent['comment']; ?>">
                  
  
  <label for="date">Date de reponse: </label>
 <input type="date" name="dateins" id="dateins" value="<?php echo $adherent['DateInscription']; ?>">
                  
    <button type="submit" value="submit" id="btn"> modifier</button>
  </form>
 </div>
 </div>

		<?php
		}
		?>
    </body>
</html>