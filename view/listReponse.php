<!DOCTYPE html>
<html lang="en">

<!-- components-gallery.html  Tue, 07 Jan 2020 03:37:00 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Components &rsaquo; Gallery &mdash; CodiePie</title>

<!-- General CSS Files -->
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
<link rel="stylesheet" href="../css/display.css">
	

<style>
    #pst{
        text-align:center;
    }
</style>
</head>

<body class="layout-4">


<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

                               <!------Start app top navbar ------------>
        <nav class="navbar navbar-expand-lg main-navbar">

        </nav>
    
        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index-2.php">Admin</a>
                </div>
                
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                   
                    
                   
                    </li>
                    
                    <li class="dropdown active">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>gestion Réclamation</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="listRec.php">Listes Réclamations</a></li>
                            <li><a class="nav-link" href="ajouterReponse.php">ajouter Réponse</a></li>
                            <li class="active"><a class="nav-link beep beep-sidebar" href="listReponse.php">Liste Réponses</a></li>
                          <!--    <li><a class="nav-link" href="modifierReponse.php">Modifier Réponse</a></li>--> 
                
                </ul>
                
            </aside>
        </div>
    
        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1 id="pst">Listes Réponses</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="ajouterReponse.php">Ajouter Réponse</a></div>
                        
                    </div>
                </div>

                <div class="section-body">
                   

                  <?php
	include '../Controller/AdherentC.php';
	$adherentC=new AdherentC();
	$listeAdherents=$adherentC->afficheradherents(); 
	 
if(isset($_POST['trier'])){
	$listeAdherents=$adherentC->affichertriRep();
  }

if(isset($_POST['search'])){

    $listeAdherents=$adherentC->afficherRecDetail($_POST["rech"]);
  }

?>


<html>
<head>
	
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




	  
		
		<table border="1" class="content">
			<thead>
			<tr id="cltr" >
				<th>Numero reponse</th>
				<th>reponse</th>
				<th>comment</th>
				<th>Date De Réponse</th>
				<th>Modifier</th>
				<th>Supprimer</th>
				
			</tr>
			</thead>
			<?php
				foreach($listeAdherents as $adherent){
			?>
			 <tbody>
			<tr>
				<td><?php echo $adherent['NumAdherent']; ?></td>
				<td><?php echo $adherent['rep']; ?></td>
				<td><?php echo $adherent['comment']; ?></td>
				<td><?php echo $adherent['DateInscription']; ?></td>
				<td>
					<form method="POST" action="modifierReponse.php">
						<input type="submit" name="Modifier" value="Modifier"   class="btn" >
						<input type="hidden" value=<?PHP echo $adherent['NumAdherent']; ?> name="NumAdherent">
					</form>
				</td>
				<td><i id="ho" class=" fas fa-trash"></i>
					<a  id="dlt" href="supprimerReponse.php?NumAdherent=<?php echo $adherent['NumAdherent']; ?>">Supprimer</a>
				</td>
			</tr>
			 <tbody>
			<?php
				}
			?>
		</table>
	</body>
</html>




                
                </div>
            </section>
        </div>
        
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/modules/jquery.sparkline.min.js"></script>
<script src="assets/modules/chart.min.js"></script>
<script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<!-- Page Specific JS File -->
<script src="js/page/index.js"></script>
<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>
<!-- components-avatar.html  Tue, 07 Jan 2020 03:36:58 GMT -->
</html>