<?php
  include "../controlleur/pieceC.php";

  $controller = new pieceC();

  
 
    $pieces = $controller->getvehicule($_GET["nom_piece"]);
 
  $lis = "";
  foreach($pieces as $piece) {
      $id = $vehicule["nom_piece"];
      $lis .= "<li><a href='#'>$nom_piece</a></li>";
  }
  $table = "";
      foreach($pieces as $piece) {
        $nom_piece = $piece["nom_piece"];
        $categorie_piece = $piece["categorie_piece"];
        $date_creation = $piece["date_creation"];
        $realisateur = $piece["realisateur"];
        $date_spectacle = $piece["date_spectacle"];
        $prix = $piece["prix"];
        $duree = $piece["duree"];
        $img_src = $piece["img_src"];
        $description = $piece["description"];

        
        $tr = "
        <div id='corps' align=center >
         <tr>
        <br>
       
        <td class='tablee'>
        <td class='tablee'>
              <table  class='table_2'>
              <br>
                <tr height=40> 
                             
                        <td colspan=2 > $marque                         
                    
                    <tr >
                        <td   rowspan=2>$modele
                           <td colspan=2 >
                            
                           $annee
                            
                           

                    
                    <tr height=40> 
                    $prix    
                      
                                             
                 
                 
               </table>
             
           
           
           </table>
           </div>";
           $table.=$tr;
      }
          
?>


<!DOCTYPE html>
<html lang="fr">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> AIM </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="art.css">
  <link rel="shoet icon" href="image/logo.png">
</head>

<body>
  <nav>

    <h1>AIM</h1>
    <div class="onglets">
    <a href="#home"  onclick=window.location.href='article.html'>Home</a>
            <a href="#Articles"  onclick=window.location.href='articlee.php'>article</a>
            <a href="#Categorie" onclick=window.location.href='afficherfrontcategorie.php'>Categories</a>
            <a href="#Chercher"  onclick=window.location.href='search.php'>chercher</a>
            <a href="#contact">Contact</a>

    </div>
  </nav>


  <header>
    <h1>AIM</h1>
    <h4>LE MEILLEUR SITE DE TECHNOLOGIE.</h4>

  </header>
  
<div id="google_translate_element"></div>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

 
  <section>
 
  <?php 
                foreach ($vehiculeS as $vehicule) {
        ?>

<div id="corps" align=center >
<div class="card" style="width:70%;" >
<h5 class="card-title"> <?php echo $vehicule['marque'] ; ?>  </h5>
  <img src="image/tech.jpg" class="card-img-top" alt="...">
  <div class="card-body">


  
    <p class="card-text"><?php echo $vehicule['modele'] ; ?></p>
    <br>
    <br>
    <br>
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><span class="date"><i class="fas fa-calendar"></i> <?php echo $vehicule['annee'] ; ?></span></li>
    <li class="list-group-item"><span class="author"><i class="fas fa-user"></i>    <colspan=2 > <?php echo $vehicule['prix'] ; ?>  </span></li>
   
  </ul>
 
  </div>
</div>
                </div>     
       
        <?php
                }
              

        ?>

  
</section>

  <footer>

    <h1>Nos services</h1>

    <p>Découvrez nos services en ligne complets .</p>
    <br>

    <div class="service">
      <h3>Paiement en ligne</h3>
      <p>Découvrez les méthodes facile de Paiement en ligne ( paiment banquaire ).</p>
    </div>


    </div>

    <p id="contact">Contact : telephone: +216 70 000 111 | Facebook/Instagram: AIM | Gmail: AIM.ESPRIT@gmail.com |
      &copy; 2021, AIM.</p>
  </footer>


</body>

</html>