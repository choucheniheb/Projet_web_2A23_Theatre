<?php
    include_once '../../../Model/reclamation.php';
    include_once '../../../Controller/reclamationC.php';

    $error = "";

    // create reclamation
    $rec = null;

    // create an instance of the controller
    $reclamtionC = new reclamC();
    if (
        isset($_POST["numrec"]) &&
		isset($_POST["typerec"]) &&		
        isset($_POST["daterec"]) &&
		isset($_POST["email"]) && 
        isset($_POST["texte"])  
    ) 
    {
        if (
            !empty($_POST["numrec"]) && 
			!empty($_POST['typerec']) &&
            !empty($_POST["daterec"]) && 
			!empty($_POST["email"]) && 
            !empty($_POST["texte"])  
        ) 
        {
            $rec= new reclamation(
                $_POST['numrec'],
				$_POST['typerec'],
                $_POST['daterec'], 
				$_POST['email'],
                $_POST['texte'],
            );

            
           $reclamtionC->modifier_rec($rec, $_POST["numrec"]);
            header('Location:afficherRec.php');
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
 
    <title>modificiation</title>
      <style>   
    Body {  
      font-family: Calibri, Helvetica, sans-serif;  
        
    }  
   
    
     input[type=text], input[type=password] ,input[type=number], input[type=email]{   
            width: 100%;   
            margin: 8px 0;  
            padding: 12px 20px;   
            
            display: inline-block;   
            border: 1px solid rgb(80, 88, 98);   
            box-sizing: border-box;   
        }  
     button:hover {   
            opacity: 0.7;   
        }   
      .cancelbtn {   
            width: auto;   
            padding: 10px 18px;  
            margin: 10px 5px;  
        }   
            
         
     .container {   
            padding: 25px;   
            background-color: rgb(56, 44, 54);  
        }  

        input.controle {
          outline:0;
          font-size:14px;
          width:250px;
        }   
        
        input.controle:valid {
          border:2px solid #0a0;
        }
        input.controle:invalid
        {
          border:2px solid #a00;
        } 
        #message {
          display:none;
          background: #f1f1f1;
          color: #000;
          position: relative;
          padding: 20px;
          margin-top: 10px;
        }

        #message p {
          padding: 10px 35px;
          font-size: 18px;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
          color: green;
        }

        .valid:before {
          position: relative;
          left: -35px;
          content: "   ✔";
        }

        /* Add a red text color and an "x" icon when the requirements are wrong */
        .invalid {
          color: red;
        }

        .invalid:before {
          position: relative;
          left: -35px;
          content: "   ✖";
        }
    </style>
</head>
    <body>
        <div class="heading">
        <button class="hero-btn"><a id="lin" href="listRec.php">Retour à la liste des reclamations</a></button>
          <h1> Modifier une reclamation </h1>
    </div>
        <div id="error">
        <?php echo $error; ?>
        </div>
		<?php
			if (isset($_POST['numrec'])){
				$rec = $reclamtionC->recuperer_rec($_POST['numrec']);	
		?>

                   
                            <!------------------   FORM   -------------->
<div class="down">
  <div class="test-form">
  <form action="" method="POST">
                
<label for="numrec">Numéro:</label>
<input class="controle"  type="number" name="numrec" id="num" value="<?php echo $rec['numrec']; ?>" maxlength="8" >
            
                    
<label for="typerec">typerec: </label>
<input  class="controle" type="text" name="typerec" id="typerec" value="<?php echo  $rec['typerec']; ?>" maxlength="20"   required pattern="[a-zA-Z-\.]{1,12}" > 
                
                       
<label for="daterec">daterec: </label>
 <input  class="controle" type="date" name="daterec" id="daterec" value="<?php echo  $rec['daterec']; ?>">
               
               
<label for="email">Email: </label>
<input  class="controle" type="email" name="email" id="email" value="<?php echo $rec['email']; ?>">
                  
                    
 <label for="contenu">contenu</label>
<input  type="texte" name="texte" id="texte" value="<?php echo $rec['texte']; ?>">
                 

<button type="submit" value="submit" id="btn"> modifier</button>
                  
             <!-- <input type="submit" value="modifier" id="btn"> -->
              
</form>
</div>
</div>
		<?php
		}
		?>
    <!--
<div class="footer">
   <p id="hhh"> projet Esprit 2022. </p> 
</div>
  -->
   
    </body>
</html>
