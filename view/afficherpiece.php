<?php
	include '../Controller/pieceC.php';
    include 'inc/header.php';
	$pieceC=new pieceC();
	$listepiece=$pieceC->afficherListepiece(); 
?>

<!DOCTYPE html>
<html lang="en">

<!-- bootstrap-table.html  Tue, 07 Jan 2020 03:36:27 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Bootstrap Components &rsaquo; Table &mdash; CodiePie</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">
</head>

<body class="layout-4">

<div id="app">
<div class="main-wrapper main-wrapper-1">
    <div class="navbar-bg"></div>

    <!-- Start app top navbar -->
    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
            <div class="search-element">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                <div class="search-backdrop"></div>
                <div class="search-result">
                    <div class="search-header">Histories</div>
                    <div class="search-item">
                        <a href="#">How to hack NASA using CSS</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="search-item">
                        <a href="#">Kodinger.com</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="search-item">
                        <a href="#">#CodiePie</a>
                        <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                    </div>
                    <div class="search-header">Result</div>
                    <div class="search-item">
                        <a href="#">
                            <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product">
                            oPhone S9 Limited Edition
                        </a>
                    </div>
                    <div class="search-item">
                        <a href="#">
                            <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                            Drone X2 New Gen-7
                        </a>
                    </div>
                    <div class="search-item">
                        <a href="#">
                            <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                            Headphone Blitz
                        </a>
                    </div>
                    <div class="search-header">Projects</div>
                    <div class="search-item">
                        <a href="#">
                            <div class="search-icon bg-danger text-white mr-3"><i class="fas fa-code"></i></div>
                            CodiePie Admin Template
                        </a>
                    </div>
                    <div class="search-item">
                        <a href="#">
                            <div class="search-icon bg-primary text-white mr-3"><i class="fas fa-laptop"></i></div>
                            Create a new Homepage Design
                        </a>
                    </div>
                </div>
            </div>
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Messages
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-avatar">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                            <div class="is-online"></div>
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Kusnaedi</b>
                            <p>Hello, Bro!</p>
                            <div class="time">10 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-avatar">
                            <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Dedik Sugiharto</b>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            <div class="time">12 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-avatar">
                            <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                            <div class="is-online"></div>
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Agung Ardiansyah</b>
                            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="time">12 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="dropdown-item-avatar">
                            <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle">
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Ardian Rahardiansyah</b>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                            <div class="time">16 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#" class="dropdown-item">
                        <div class="dropdown-item-avatar">
                            <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Alfa Zulkarnain</b>
                            <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <div class="time">Yesterday</div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
                </div>
            </li>
            <?php include_once "UserMenu.php" ?>
        </ul>
    </nav>
    <?php include_once "SideMenu.php" ?>
    <!-- Start app main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Table of Piece</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Piece</a></div>
                    <div class="breadcrumb-item">Table of piece</div>
                </div>
            </div>


            <?php
  if(isset($_POST['trier'])){
	$listepiece=$pieceC->triListepiece();
  }
?>

            <form action="" method="post">
                <input type="submit" value="affficher les piece les plus récentes" name="trier" class="btn bg-gradient-primary mt-4 mb-4 w-50">
            </form>

            <?php
     if (isset($_GET['nom_piece'])){
        $listepiece = $pieceC->rechercherpiece($_GET['nom_piece']); 
    }



	//$listeAdherents=$vehiculeC->afficheradherents(); 
?>
    <form action="" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                         <!--placeholder lhaja ily t7bha tbnleeekk  f l imput s -->
                         <!--  name lazem aalkhtr najmooo nrecupiro byh l valeur -->
                            <input type="text" name="nom_piece" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
    </form>




            </br>

            <div class="section-body">

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6"><div class="card">
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">name of piece</th>
                                    <th scope="col">categorie</th>
                                    <th scope="col">date of creation</th>
                                    <th scope="col">realisateur</th>
                                    <th scope="col">date of show</th>
                                    <th scope="col">price of ticket</th>
                                    <th scope="col">duree</th>
                                    <th scope="col">description</th>
                                    <th scope="col">Modifier</th>
                                    <th scope="col">supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                </tr>
                                    <?php
				                        foreach($listepiece as $piece){
			                        ?>
			                        <tr>
                                    <th scope="row"><?php echo $piece['nom_piece']; ?></th>
				                        <td><?php echo $piece['categorie_piece']; ?></td>
				                        <td><?php echo $piece['date_creation']; ?></td>
				                        <td><?php echo $piece['realisateur']; ?></td>
				                        <td><?php echo $piece['date_spectacle']; ?></td>
				                        <td><?php echo $piece['prix']; ?></td>
				                        <td><?php echo $piece['duree']; ?></td>
				                        <td><?php echo $piece['description']; ?></td>
				                        <td>
					                        <form method="POST" action="modifierpiece.php">
						                        <input type="submit" name="Modifier" value="Modifier">
						                        <input type="hidden" value=<?PHP echo $piece['nom_piece']; ?> name="nom_piece">
					                        </form>
				                        </td>
				                        <td>
					                        <a href="supprimerpiece.php?nom_piece=<?php echo $piece['nom_piece']; ?>">Supprimer</a>
				                        </td>
			                        </tr>
			                            <?php
				                            }
			                            ?>
                                </tbody>
                            </table>
                    </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Start app Footer part -->
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

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- bootstrap-table.html  Tue, 07 Jan 2020 03:36:27 GMT -->
</html>