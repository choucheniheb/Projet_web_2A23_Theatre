<!DOCTYPE html>
<html lang="en">

<!-- components-avatar.html  Tue, 07 Jan 2020 03:36:58 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Components &rsaquo; Avatar &mdash; CodiePie</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="../assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/modules/fontawesome/css/all.min.css">


<!-- CSS Libraries -->
<link rel="stylesheet" href="../assets/modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="../assets/modules/summernote/summernote-bs4.css">
<link rel="stylesheet" href="../assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="../assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
<!-- Template CSS -->
<link rel="stylesheet" href="../assets/css/style.min.css">
<link rel="stylesheet" href="../assets/css/components.min.css">
<link rel="stylesheet" href="../../../css/all.min.css">

</head>

<body class="layout-4">

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

                                            <!----------Start app top navbar---------->
        

                                         <!-------art main left sidebar menu --------->
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index-2.php">Espace Admin</a>
                </div>
                
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    
                    
                   
                    
                    
                    <li class="dropdown active">
                        <a href="listRec.php" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Gestion Réclamations</span></a>
                        <ul class="dropdown-menu">
                             <li><a class="nav-link" href="listRec.php">Liste Réclamations</a></li>
                            <li class="active"><a class="nav-link beep beep-sidebar" href="ajouterReponse.php">Ajouter Réponses</a></li>
                            <li><a class="nav-link" href="listReponse.php">Liste Réponses</a></li> 
                           
                        <!--    <li><a class="nav-link" href="components-chat-box.html">Modifier Réponse</a></li> -->
                           
                        </ul>
                    </li>
                   
                  
                   
            </aside>
        </div>

                                        <!------------- Start app main Content ---------->
        <div class="main-content">
            
            <?php
    include_once '../../../Model/Adherent.php';
    include_once '../../../Controller/AdherentC.php';

    $error = "";

    // create adherent
    $adherent = null;

    // create an instance of the controller
    $adherentC = new AdherentC();
    if (
        isset($_POST["number"]) &&
		isset($_POST["rep"]) &&		 
        isset($_POST["comment"]) && 
        isset($_POST["dateins"])
    ) {
        if (
            !empty($_POST["number"]) && 
			!empty($_POST['rep']) && 
            !empty($_POST["comment"]) && 
            !empty($_POST["dateins"])
        ) {
            $adherent = new Adherent(
                $_POST['number'],
				$_POST['rep'],
                $_POST['comment'],
                $_POST['dateins']
            );
            $adherentC->ajouteradherent($adherent);
           /* header('Location:afficherReponse.php'); */
        }
        else
            $error = "Missing information";
    }

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/ajoutRep.css">
    <link rel="stylesheet" href="../../../css/display.css">
    <link rel="stylesheet" href="../../../css/affiche.css">
    <title>repons</title>
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

</style>
</head>
    <body>
       
        <section class="secthree">
        <div id="error">
            <?php echo $error; ?>
        </div>
        <h1 id="r"> Repondre sur une reclamation </h1>




         <div class="test-form">
        <form action="" method="POST" id="form">
                           
  <div class="input-control">
    <label for="numadherent">Numéro de rec a repondre:</label>
     
    <input class="controle" type="number" name="number" id="number" maxlength="20" required minlength="1" maxlength="20"  >
   
    <div class="error"></div>
    </div>


<div class="input-control">
  <label for="rep">reponse sur la reclamation:</label>
 <input type="text" name="rep" id="rep" maxlength="20">
 <div class="error"></div>
</div>
 

 <div class="input-control">
 <label for="comment">commentaire: </label>
 <input type="comment" name="comment" id="comment">
  <div class="error"></div>
</div>               
 
 <div class="input-control">
 <label for="date">Date de reponse: </label>                    
 <input type="date" name="dateins" id="dateins" ><br>
 <div class="error"></div>
</div>                   

 <div class="input-control">
 <button type="submit" value="Envoyer" >Envoyer</button>
 <div class="error"></div>
</div>                


</form>
</div>      
</section>
 </body>
</html>
        </div>







                                                <!-- Start app Footer part -->
        
    </div>
</div>

<!-- General JS Scripts -->
<script src="../assets/modules/jquery.sparkline.min.js"></script>
<script src="../assets/modules/chart.min.js"></script>
<script src="../assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="../assets/modules/summernote/summernote-bs4.js"></script>
<script src="../assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<!-- Page Specific JS File -->
<script src="../js/page/index.js"></script>
<!-- Template JS File -->
<script src="../js/scripts.js"></script>
<script src="../js/custom.js"></script>
</body>
<!-- components-avatar.html  Tue, 07 Jan 2020 03:36:58 GMT -->
</html>