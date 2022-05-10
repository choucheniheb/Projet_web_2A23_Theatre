<?php
	include '../Controller/ticketsc.php';
    include 'inc/header.php';
	$ticketsc=new ticketsc();
	$listetickets=$ticketsc->affichertickets(); 
    $login= $ticketsc->recupererlogin(1);
?>

<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">


<!-- grandconference/about-conference.html  22 Nov 2019 03:52:40 GMT -->
<head>

    <title>Grand Conference | Event Conference HTML Template</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel='stylesheet' href='js/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/reset.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/wordpress.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/animation.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/ilightbox/ilightbox.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/jqueryui/custom.css' type='text/css' media='all'>
    <link rel='stylesheet' href='js/plugins/mediaelement/mediaelementplayer-legacy.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='js/plugins/flexslider/flexslider.css' type='text/css' media='all'>
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/pricing-table.css">
    <link rel='stylesheet' href='css1/tooltipster.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/odometer-theme-minimal.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/style.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/menus/leftalignmenu.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/font-awesome.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/themify-icons.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/grandconference_custom_css.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/kirki-styles.css' type='text/css' media='all'>
    <link rel='stylesheet' href='css1/grid.css' type='text/css' media='all'>

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Work+Sans%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%7CPoppins%3A300%2Cregular%2C500%2C600%2C700%2C900&amp;subset' type='text/css' media='all'>
    <link href="http://fonts.googleapis.com/css?family=Poppins:600%2C700%2C400%2C500" rel="stylesheet" property="stylesheet" type="text/css" media="all">


    <link rel="icon" href="upload/cropped-TG-Thumb-32x32.png" sizes="32x32">
    <link rel="icon" href="upload/cropped-TG-Thumb-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="upload/cropped-TG-Thumb-180x180.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <meta name="msapplication-TileImage" content="../../../themegoods-cdn-pzbycso8wng.stackpathdns.com/grandconference/demo/upload/cropped-TG-Thumb-270x270.html">


</head>

<body class="speaker-template-default single single-speaker postid-138 woocommerce-no-js">

    <input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="leftalign">
    <input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value="0">
    <input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value="0">
    <input type="hidden" id="pp_image_path" name="pp_image_path" value="upload/">
    <input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="index-2.html">
    <input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1">
    <input type="hidden" id="tg_smart_fixed_menu" name="tg_smart_fixed_menu" value="1">
    <input type="hidden" id="tg_sidebar_sticky" name="tg_sidebar_sticky" value="1">
    <input type="hidden" id="pp_topbar" name="pp_topbar" value="0">
    <input type="hidden" id="post_client_column" name="post_client_column" value="4">
    <input type="hidden" id="pp_back" name="pp_back" value="Back">
    <input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="">
    <input type="hidden" id="tg_portfolio_filterable_link" name="tg_portfolio_filterable_link" value="">
    <input type="hidden" id="tg_flow_enable_reflection" name="tg_flow_enable_reflection" value="">
    <input type="hidden" id="tg_lightbox_skin" name="tg_lightbox_skin" value="metro-black">
    <input type="hidden" id="tg_lightbox_thumbnails" name="tg_lightbox_thumbnails" value="horizontal">
    <input type="hidden" id="tg_lightbox_thumbnails_display" name="tg_lightbox_thumbnails_display" value="1">
    <input type="hidden" id="tg_lightbox_opacity" name="tg_lightbox_opacity" value="0.8">
    <input type="hidden" id="tg_sidemenu_overlay_effect" name="tg_sidemenu_overlay_effect" value="blur">
    <input type="hidden" id="tg_cart_url" name="tg_cart_url" value="#">
    <input type="hidden" id="tg_live_builder" name="tg_live_builder" value="0">
    <input type="hidden" id="pp_footer_style" name="pp_footer_style" value="3">

    <!-- Begin mobile menu -->
    <a id="close_mobile_menu" href="javascript:;"></a>

    <div class="mobile_menu_wrapper">
        <a id="mobile_menu_close" href="javascript:;" class="button"><span class="ti-close"></span></a>

        <div class="mobile_menu_content">

            <div class="menu-main-menu-container">
                <ul id="mobile_main_menu" class="mobile_main_nav">
                <ul class="sub-menu">
                            <?php if (Session::get('id') == TRUE) { ?>
                            <?php if (Session::get('roleid') == '1') { ?>
                            

                                <li class="menu-item"><a class="nav-link" href="index.php"><i class="fas fa-users mr-2"></i>User lists </span></a></li>
                            
                            

                                <li class="menu-item"><a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user </span></a></li>
                            
                            <?php  } ?>
                            

                            <li class="menu-item"><a class="nav-link" href="profile.php?id=<?php echo Session::get("id"); ?>"><i class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a></li>
                            
                            <li class="menu-item"><a class="nav-link" href="?action=logout"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a></li>
                            
                            <?php }else{ ?>

                                

                            
                                <li class="menu-item"><a class="nav-link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Register</a></li>
                                
                                
                                <li class="menu-item"><a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a></li>
                                

                            <?php } ?>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Reclamation</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">TEST</a></li>
                            <li class="menu-item"><a href="#">>TEST</a></li>
                            <li class="menu-item"><a href="#">>TEST</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Acceuil</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">TEST</a></li>
                            <li class="menu-item"><a href="#">>TEST</a></li>
                            <li class="menu-item"><a href="#">>TEST</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">TEST</a></li>
                            <li class="menu-item"><a href="#">>TEST</a></li>
                            <li class="menu-item"><a href="#">>TEST</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children"><a href="#">Piece</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="#">TEST</a></li>
                            <li class="menu-item"><a href="#">>TEST</a></li>
                            <li class="menu-item"><a href="#">>TEST</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Begin side menu sidebar -->
            <div class="page_content_wrapper">
                <div class="sidebar_wrapper">
                    <div class="sidebar">

                        <div class="content">

                            <ul class="sidebar_widget">
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End side menu sidebar -->

            <div class="social_wrapper">
                <ul>
                    <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook-official"></i></a></li>
                    <li class="twitter"><a target="_blank" href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                    <li class="youtube"><a target="_blank" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                    <li class="google"><a target="_blank" title="Google+" href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="instagram"><a target="_blank" title="Instagram" href="http://instagram.com/tedxvienna"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End mobile menu -->
    <!-- Begin template wrapper -->
    <div id="wrapper" class="hasbg transparent">

        <div class="header_style_wrapper">
            <!-- End top bar -->

            <div class="top_bar hasbg">
                <div class="standard_wrapper">
                    <!-- Begin logo -->
                    <div id="logo_wrapper">

                        <div id="logo_normal" class="logo_container">
                            <div class="logo_align">
                                <a id="custom_logo" class="logo_wrapper hidden" href="index-2.html">
                                    <img src="../upload/logo%402x.png" alt="" width="158" height="20" />
                                </a>
                            </div>
                        </div>

                        <div id="logo_transparent" class="logo_container">
                            <div class="logo_align">
                                <a id="custom_logo_transparent" class="logo_wrapper default" href="index-2.html">
                                    <img src="../upload/logo%402x_white.png" alt="" width="158" height="20" />
                                </a>
                            </div>
                        </div>
                        <!-- End logo -->

                        <div id="menu_wrapper">
                            <div id="nav_wrapper">
                                <div class="nav_wrapper_inner">
                                    <div id="menu_border_wrapper">
                                        <div class="menu-main-menu-container">
                                            <ul id="main_menu" class="nav">
                                                <li class="menu-item current-menu-item menu-item-has-children arrow"><a href="connexion.php">User</a>
                                                <ul class="sub-menu">
                                                <?php if (Session::get('id') == TRUE) { ?>
                            <?php if (Session::get('roleid') == '1') { ?>
                            

                                <li class="menu-item"><a class="nav-link" href="userList.php"><i class="fas fa-users mr-2"></i>User lists </span></a></li>
                            
                            

                                <li class="menu-item"><a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user </span></a></li>
                            
                            <?php  } ?>
                            

                            <li class="menu-item"><a class="nav-link" href="profile.php?id=<?php echo Session::get("id"); ?>"><i class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a></li>
                            
                            <li class="menu-item"><a class="nav-link" href="?action=logout"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a></li>
                            
                            <?php }else{ ?>

                                

                            
                                <li class="menu-item"><a class="nav-link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Register</a></li>
                                
                                
                                <li class="menu-item"><a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a></li>
                                

                            <?php } ?>
                                                </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children arrow"><a href="#">Reclmation</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="#">Null</a></li>
                                    
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children arrow"><a href="">Piece</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="pieceliste.php">liste de piece</a></li>
                                                        <li class="menu-item"><a href="ajouteracteur.php">ajouter acteur</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children arrow"><a href="#">Reclamation</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="soumettre.php">soumettre</a></li>
                                    
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children arrow menu-item-59"><a href="#">Blog</a>
                                                    <ul class="sub-menu">
                                                    <?php if (Session::get('id') == TRUE) { ?>
                                                    <?php if (Session::get('roleid') == '1') { ?>
                                                        <li>

                                                            <a class="nav-link" href="backoffice.php">Admin Article list</a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link" href="backoffice.php">Modifier un Article </a>
                                                        </li>
                                                        <li>

                                                        <a class="nav-link" href="articles.php">Afficher les articles </a>
                                                        </li>
                                                        <li>

                                                        <a class="nav-link" href="ajouterArticle.php">Ajouter un Article </a>
                                                        </li>
                                                    <?php }else{ ?>

                                                        <li>

                                                            <a class="nav-link" href="articles.php">Afficher les articles </a>
                                                        </li>
                                                        <li>

                                                            <a class="nav-link" href="ajouterArticle.php">Ajouter un Article </a>
                                                        </li>

                                                    <?php } ?>
                                                    <?php  } ?>
                                    
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children arrow"><a href="#">user reservation</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="affichageticketfront.php">votre ticket</a></li>
                                                        <li class="menu-item"><a href="affichageabonnementfront.php">votre abonnement</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- Begin right corner buttons -->
                                <div id="logo_right_button">

                                    <a href="#" id="get_ticket" class="button ghost">Get subscription!</a>

                                    <!-- Begin side menu -->
                                    <a href="javascript:;" id="mobile_nav_icon"><span class="ti-menu"></span></a>
                                    <!-- End side menu -->

                                </div>
                                <!-- End right corner buttons -->
                            </div>
                            <!-- End main nav -->
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="page-single">
            <div class="container">
               <div class="row">
                   <div class="col-md-9 col-sm-12 col-xs-12">
                       <div class="blog-detail-ct">
                           <div class="comment-form">
                               <form action="#">
                               </form>
                           </div>
                           <!-- comment form -->
                       </div>
                   </div>
               </div>
               </div>
           </div>

        

        <!--*********************-->
                <h1>Table of tickets</h1>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">>numero ticket</th>
                                    <th scope="col">nom</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">adresse</th>
                                    <th scope="col">date naissance</th>
                                    <th scope="col">email</th>
                                    <th scope="col">date spectacle</th>
                                    <th scope="col">nom de piece</th>
                                    <th scope="col">annulation</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                </tr>
                                    <?php
				                        foreach($listetickets as $tickets){
                                            $login1= $ticketsc->recupererlogin($tickets['id_login']);
                                            if($login['id_login']==$login1['id_login']){
			                        ?>
			                        <tr>
                                        <th scope="row"><?php echo $tickets['num_ticket']; ?></th>
				                        <td><?php echo $login['nom']; ?></td>
				                        <td><?php echo $login['prenom']; ?></td>
				                        <td><?php echo $login['adresse']; ?></td>
				                        <td><?php echo $login['date_naissance']; ?></td>
				                        <td><?php echo $login['email']; ?></td>
				                        <td><?php echo $tickets['date_spect']; ?></td>
				                        <td><?php echo $tickets['nom_piece']; ?></td>
				                        <td>
					                        <a href="supprimertickets.php?num_ticket=<?php echo $tickets['num_ticket']; ?>">annuler</a>
				                        </td>
			                        </tr>
			                            <?php
				                            }
                                        }
			                            ?>
                                </tbody>
                            </table>
        <!--*********************-->





        <div class="footer_bar  ppb_wrapper ">

            <div class="footer_bar_wrapper ">
                <div id="copyright"><a href="templateshub.net">Templateshub</a></div>
                <br class="clear">
                <a id="toTop" href="javascript:;"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>

        <div id="side_menu_wrapper" class="overlay_background">
            <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>
        </div>
    </div>



    <script src='js/jquery.js'></script>
    <script src='js/jquery-migrate.min.js'></script>
    <script src='js/plugins/ui/core.min.js'></script>
    <script src='js/plugins/jquery.requestAnimationFrame.js'></script>
    <script src='js/plugins/ilightbox.packed.js'></script>
    <script src='js/plugins/jquery.easing.js'></script>
    <script src='js/plugins/waypoints.min.js'></script>
    <script src='js/plugins/jquery.isotope.js'></script>
    <script src='js/plugins/jquery.masory.js'></script>
    <script src='js/plugins/jquery.tooltipster.min.js'></script>
    <script src='js/plugins/jarallax.js'></script>
    <script src='js/plugins/jquery.sticky-kit.min.js'></script>
    <script src='js/plugins/jquery.stellar.min.js'></script>
    <script src='js/plugins/jquery.cookie.js'></script>
    <script src='js/plugins/custom_plugins.js'></script>
    <script src='js/plugins/custom.js'></script>
    <script src='js/plugins/custom_onepage.js'></script>
    <script src='js/plugins/jquery.countdown.js'></script>
    <script src='js/plugins/imagesloaded.min.js'></script>
    <script src='js/plugins/masonry.min.js'></script>
    <script src='js/plugins/custom_sidebar.min.js'></script>
    <script src='js/plugins/jarallax-video.js'></script>
    <script src='js/plugins/jquery.cookie.js'></script>
    <script src='js/plugins/custom_clock.js'></script>
    <script>
        /* <![CDATA[ */
        var mc4wp_forms_config = [];
        /* ]]> */
    </script>


</body>

<!-- grandconference/about-conference.html  22 Nov 2019 03:52:56 GMT -->
</html>

