<?php
include 'inc/header.php';

Session::CheckSession();
include_once '../controller/controller.php';

$idU = Session::get('id');
$id = $_GET["id"];


$liste = ArticleC::afficherArticle($id);
$listeC = CommentaireC::afficher($id);

 

if (isset($_POST["comment"])) {
   CommentaireC::ajouter($idU, $id, $_POST["comment"]);
   header ('Location: ' .'blogarticle.php?id='.$id);
}


if (isset($_GET["like"])){
   ArticleC::ajouterlike($id,$idU);
   header ('Location: ' .'blogarticle.php?id='.$id);
}
if (isset($_GET["dislike"])){
   ArticleC::ajouterdislike($id,$idU);
   header ('Location: ' .'blogarticle.php?id='.$id);
}


?>
<!DOCTYPE html>
<html lang="en">

<!-- features-tickets.html  Tue, 07 Jan 2020 03:39:50 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Tickets &mdash; CodiePie</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
<link rel="stylesheet" href="assets/modules/chocolat/dist/css/chocolat.css">

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">
</head>

<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

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
                            <a href="#">How to Used HTML in Laravel</a>
                            <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                        </div>
                        <div class="search-item">
                            <a href="https://themeforest.net/user/admincraft/portfolio" target="_black">Admincraft Portfolio</a>
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
                                oPhone 11 Pro
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product">
                                Drone Zx New Gen-3
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="#">
                                <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product">
                                Headphone JBL
                            </a>
                        </div>
                        <div class="search-header">Projects</div>
                        <div class="search-item">
                            <a href="https://themeforest.net/item/epice-laravel-admin-template-for-hr-project-management/24466729" target="_black">
                                <div class="search-icon bg-danger text-white mr-3"><i class="fas fa-code"></i></div>
                                Epice Laravel - Admin Template
                            </a>
                        </div>
                        <div class="search-item">
                            <a href="https://themeforest.net/item/soccer-project-management-admin-template-ui-kit/24646866" target="_black">
                                <div class="search-icon bg-primary text-white mr-3"><i class="fas fa-laptop"></i></div>
                                Soccer - Admin Template
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
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-header">Notifications
                        <div class="float-right">
                            <a href="#">Mark All As Read</a>
                        </div>
                    </div>
                    <div class="dropdown-list-content dropdown-list-icons">
                        <a href="#" class="dropdown-item dropdown-item-unread">
                            <div class="dropdown-item-icon bg-primary text-white">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="dropdown-item-desc"> Template update is available now!
                                <div class="time text-primary">2 Min Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-info text-white">
                                <i class="far fa-user"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                                <div class="time">10 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-success text-white">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                                <div class="time">12 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-danger text-white">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                Low disk space. Let's clean it!
                                <div class="time">17 Hours Ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item">
                            <div class="dropdown-item-icon bg-info text-white">
                                <i class="fas fa-bell"></i>
                            </div>
                            <div class="dropdown-item-desc">
                                Welcome to CodiePie template!
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
                    <h1>Tickets</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item">Tickets</div>
                    </div>
                </div>

                <div class="section-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Blog</h4>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="btn btn-primary btn-icon icon-left btn-lg btn-block mb-4 d-md-none" data-toggle-slide="#ticket-items"><i class="fas fa-list"></i> All Tickets</a>
                                    <div class="tickets">
                                    <?php
   foreach ($liste as $l) {


   ?>
                                        <div class="ticket-content">
                                            <div class="ticket-header">
                                                <div class="ticket-sender-picture img-shadow"><img src="assets/img/avatar/avatar-5.png" alt="image"></div>
                                                <div class="ticket-detail">
                                                    <div class="ticket-title">
                                                        <h4>Technical Problem</h4>
                                                    </div>
                                                    <div class="ticket-info">
                                                        <div class="font-weight-600"><?php echo $l["ecrivain"] ?></div>
                                                        <div class="bullet"></div>
                                                        <div class="text-primary font-weight-600">2 min ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ticket-description">
                                                <p><?php echo $l["contenu"] ?></p>

                                                <div class="gallery">
                                                    <div class="gallery-item" data-image="<?php echo $l["photo"] ?>" data-title="Image 1"></div>
                                        
                                                
                                                </div>

                                                <div class="ticket-divider"></div>
                                                <a href="blogarticle.php?id=<?php echo $l["id"] ?>&like=true">
<?php echo (ArticleC::afficherlikes($l["id"]))["nb"]; ?>
               
<img src="data:image/png;base64,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" alt="" width=30 height=30 >

   </a>
<a href="blogarticle.php?id=<?php echo $l["id"] ?>&dislike=true">
<?php echo (ArticleC::afficherdislikes($l["id"]))["nb"]; ?>
               
<img src="data:image/jpeg;base64,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" alt="" width=30 height=30 >
</a>
                                                <div class="ticket-form">
                                                <form action="" method="POST">
                                                    <div class="form-group">
                                                    <textarea class="summernote form-control" placeholder="Ecrire un commentaire ..." name="comment"></textarea>
                                                    </div>
                                                    <div class="form-group text-right">
                                                    <button class="btn btn-primary btn-lg">
                                                        Reply
                                                    </button>
                                                    </div>
                                                </form>
                                                </div>
                                                <?php foreach ($listeC as $comment) {


    $getUinfo = $users->getUserInfoById($comment["id_user"]);
    if ($getUinfo) {
                                 
?>
<div class="ticket-divider"></div>
<h3><?php echo $getUinfo->name;} ?></h3>     <?php // a changer?>
<p><?php echo $comment["contenu"]?></p>
<?php if ($comment["id_user"] == $idU) { ?>
<a href="supprimerc.php?id=<?php echo $comment["id"]?>&idp=<?php echo $id?>">supprimer</a>
<a href="modifierc.php?id=<?php echo $comment["id"]?>&idp=<?php echo $id?>">modifier</a>
<?php
}
?>


<?php
}
?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
   }
   ?>  

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
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- features-tickets.html  Tue, 07 Jan 2020 03:39:50 GMT -->
</html>