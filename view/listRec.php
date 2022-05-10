<!DOCTYPE html>
<html lang="en">

<!-- components-article.html  Tue, 07 Jan 2020 03:36:27 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>réclamations &rsaquo; listes Réclamations &mdash; CodiePie</title>

<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
<link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">
<link rel="stylesheet" href="css/all.min.css">

<style>
  #piechart{
   
    max-width: 50%;
    margin:auto;
  }
  #head{
    text-align:left;
  }
  #rech{
      margin : 8px;
  }
  #pst{
      margin : 5px;
      font-size:15px;
      color: black;
      font-weight:400;
  }

</style>
</head>

<body class="layout-4">

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

                          <!---------------- Start app top navbar ---------------------------->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                  
                </ul>
                <div class="search-element">
                    
                </div>
            </form>
            <ul class="navbar-nav navbar-right">
               
                
            </ul>
             </nav> 
                               <!-----------------------ENd of nav----------------->


                      <!---------------------- Start main left sidebar menu ------------------->
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="afficherpiece.php">ADMIN</a>
                </div>
                
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    
                   
                    
                    
                    
                    
                    <li class="dropdown active">
                         <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Gestion Réclamation</span></a>
                         <ul class="dropdown-menu">
                          <li class="active"><a class="nav-link beep beep-sidebar" href="listRec.php">Liste Réclamations</a></li>
                         <li class="nav-link"><a class="nav-link" href="ajouterReponse.php">Ajouter Réponses</a></li>
                         <li><a class="nav-link" href="listReponse.php">Listes Réponses</a></li>
                        <!--   <li><a class="nav-link" href="modifierReponse.php">Modifier Réponse</a></li> --> 
                        
                         </ul>
                         </li>
                    <!-- 
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
                            <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                            <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
                        </ul>
                    </li>
                    -->
                    
                   
                    
                   
            </aside>
        </div>

                                    <!-----------------Start app main Content ---------------------------->



        <div class="main-content">
<section class="section">
                <div class="section-header">
                    <h1 id="">gestion des réclamations</h1>
                    <div class="section-header-breadcrumb">
                        
                        
                    </div>
                </div>

<?php

include '../Controller/reclamationC.php';
       /*  ------ AFFICHER  ----*/
	$reclam=new reclamC();
	$listeReclamation=$reclam->Afficher();

  if(isset($_POST['trier'])){
	$listeReclamation=$reclam->Affichertri();
  }

  if(isset($_POST['search'])){

    $listeReclamation=$reclam->afficherRecDetail($_POST["rech"]);
  }
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/display.css">
    <link rel="stylesheet" href="../css/affiche.css">
    <link rel="stylesheet" href="../css/all.min.css">
</head>

<body>

   

<form action="" method="post">
    <input type="submit" value="affficher les réclamations les plus récentes" name="trier" class="btn bg-gradient-primary mt-4 mb-4 w-50">
    </form>


<div class="form-center">

    <form action="" method="post" class="chercher">
        
    <div class="form-group">
    <label for="" class="form-label" id="pst" >Numéro du Reclamation a chercher : </label><br>
    

    <input type="text" name="rech" id="rech" place-holder="Numero Reclamation"><br>
    <input type="submit" value="rechercher" name="search" id="reche" class=" btn bg-gradient-primary mt-1 w-33 h-15">
    <input type="submit" action="listRec.php" value="retour" name="retour" class=" btn bg-gradient-primary mt-1 w-33 h-15 " >
    </div>
    </form>
    </div>


<h2>La liste des réclamations</h2>
    <table border="1" class="content">
        <thead>
            <tr>
                <th width="20px">Num Reclamation</th>
                <th width="100px">typerec</th>
                <th width="100px">daterec</th>
                <th width="190px">Email</th>
                <th width="300px">texte de la reclamation</th>
                <th>Modifier</th>
                <th>Supprimer</th>
                <th>Extraire PDF</th>
            </tr>
        </thead>

        <?php
				foreach($listeReclamation as $adherent){
			?>

        <tbody>

            <tr>
                <td>
                    <?php echo $adherent['numrec']; ?>
                </td>
                <td>
                    <?php echo $adherent['typerec']; ?>
                </td>
                <td>
                    <?php echo $adherent['daterec']; ?>
                </td>
                <td>
                    <?php echo $adherent['email']; ?>
                </td>
                <td id="txt">
                    <?php echo $adherent['texte']; ?>
                </td>

                <td>
                    <form method="POST" action="modifierRec.php">
                        <input type="submit" name="Modifier" value="Modifier" class="btn">
                        <input type="hidden" value=<?PHP echo $adherent['numrec']; ?> name="numrec">
                    </form>
                </td>

                <td>
                    <a id="dlt" href="SupprimerRec.php?numrec=<?php echo $adherent['numrec']; ?>">Supprimer</a>
                </td>
                 <td>
                    <a id="dlt" href="extrairePDF.php?numrec=<?php echo $adherent['numrec']; ?>">Extraire PDF</a>
                </td>
            </tr>
        </tbody>

        <?php
				}
			?>
    </table>

<h3>Statistiques sur les types des réclamations:</h3>

<div id="piechart"> 
<?php 
include_once "../Controller/reclamationC.php";
$reclamationC = new reclamC();
$listeC = $reclamationC->statistiques();
 ?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
// Draw the chart and set the chart values
function drawChart() { 
  var data = google.visualization.arrayToDataTable([
  [ 'type', 'nombre'],
  <?php
  foreach($listeC as $k){
   echo "["; echo "'";echo $k['typerec'];echo"'";echo",";echo $k['count(*)'];echo"],";}?>

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'', 'width':400, 'height':250};

  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
</div>

  </section>
        </div>

        </div>

                                   <!---------- Start app Footer part ---------->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>  <a href="templateshub.net">Templates Hub</a>
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>


<!-- JS Libraies -->
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

<!-- components-article.html  Tue, 07 Jan 2020 03:36:58 GMT -->
</html>