<?php
require_once '../../../vendor/autoload.php';
include_once '../../../Model/reclamation.php';
include_once '../../../Controller/reclamationC.php';
use Twilio\Rest\Client;
$sid = 'AC2ead9f6d6de2136f94bde3ef8014c8c6';
$token = '81f4e6ebd2523743673f5c56dbd5b0bc';
$client = new Client($sid, $token);
 $error = "";

    // create reclamation
    $reclamtion = null;

    // create an instance of the controller
    $reclamtionC = new reclamC();
   

    if (
        isset($_POST["number"]) &&
		isset($_POST["typerec"]) &&		
        isset($_POST["daterec"]) &&
		isset($_POST["email"]) && 
        isset($_POST["texte"])  
    ) 


    {
        if (
            !empty($_POST["number"]) && 
			!empty($_POST['typerec']) &&
            !empty($_POST["daterec"]) && 
			!empty($_POST["email"]) && 
            !empty($_POST["texte"])  
        ) 


        {
            $reclamtion = new reclamation(
                $_POST['number'],
			        	$_POST['typerec'],
                $_POST['daterec'], 
				        $_POST['email'],
                $_POST['texte'],
            );
           $reclamtionC->ajouterRec($reclamtion);
           $client->messages->create('+21629353006',
    [
        'from' => '+19804092502',
        'body' => 'Une reclamation a été ajouté'
    ]
);
           /* header('Location:afficherListeAdherents.php'); */
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
    <link rel="stylesheet" href="../../../css/soumettre.css">
    <link rel="stylesheet" href="../../../css/all.min.css">
    <link rel="stylesheet" href="../../../css/all.min.css">
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
          border: 2px solid #0a0;
        }
        input.controle:invalid
        {
          border:1px solid #a00;
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
        #format{
          width: 150px;
          height:35px;
        padding:5px;
  margin:10px;
   border-radius: .25em;
}
      #format::after {
   content: '\25BC';
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: #2b2e2e;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
#format:hover::after {
   color: #23b499;
}
#type{
  text-align:center;
  font-size: 12px;
}
#lname{
  margin-top:10px;
}

    </style>
    <title>Document</title>
</head>
<body>
<section class="secone">
    <nav>
        <i class="fas fa-theater-masks fa-3x" id="ic"></i>
        <h2 id="head">theatre24</h2>
        <div class="nav-links">
            <ul>
                <li><i id="ho" class=" fas fa-home"></i><a href="#">Acceuil</a></li>
                 <li><a href="afficherRec.php">Voir mes reclmations</a></li>
            </ul>
        </div>
    </nav>
</section>

<section class="secthree">
    <h1 id="r">déposer votre réclamation:</h1>
    <div class="test-form">
<h1 id="re">Informations de la réclamation:</h1>
        <!-- -------------------- FORM ------------------------>
<form action="" method="POST" id="form">
    
  <div class="input-control">

    <label for="number">Numero:</label>

    <input class="controle" type="number" name="number" id="number" maxlength="8" required minlength="1" maxlength="20">
     <div class="error"></div>
    </div>

  
<label for="typerec" >type de reclamation:</label>

 <select name="typerec" id="format">
<option id="type">Choisir le Type</option>
<option id="retard">Retard</option>
<option id="expire">Expiré</option>
 </select>
   


<div>
<label for="lname" id="lname"> date de reclamation:</label>
<input class="controle" type="date" name="daterec" id="daterec" min="2018-01-01" ><br>
 
</div>

<div class="input-control">
<label for="email">Email:</label>
<input class="controle" type="email" name="email" id="email"  required minlength="1" maxlength="50"><br>
 <div class="error"></div>
</div>


<div class="input-control">
<label id="ob" for="obje" > <h1>objet de la demande</h1></label><br>
<textarea class="controle" name="texte" id="texte" cols="30" rows="10"  required minlength="1" maxlength="2000"></textarea><br>
 <div class="error"></div>
</div>

<button type="submit" value="Envoyer" >Envoyer</button>

</form>
</div>
</section>

</body>
</html>

