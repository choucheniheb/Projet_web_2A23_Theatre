<?php
include 'inc/header.php';
?>
<!DOCTYPE html>
<html lang="en-US" data-menu="leftalign">


<!-- grandconference/  22 Nov 2019 03:46:25 GMT -->
<head>

    <title>Theatre 24</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">


    <link rel='stylesheet' href='../js/plugins/revslider/public/assets/css/settings.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/reset.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/wordpress.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/animation.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/ilightbox/ilightbox.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/jqueryui/custom.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../js/plugins/mediaelement/mediaelementplayer-legacy.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../js/plugins/flexslider/flexslider.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/tooltipster.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/odometer-theme-minimal.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/style.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/menus/leftalignmenu.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/font-awesome.min.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/themify-icons.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/grandconference_custom_css.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/kirki-styles.css' type='text/css' media='all'>
    <link rel='stylesheet' href='../css/grid.css' type='text/css' media='all'>

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Work+Sans%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900%7CPoppins%3A300%2Cregular%2C500%2C600%2C700%2C900&amp;subset' type='text/css' media='all'>
    <link href="http://fonts.googleapis.com/css?family=Poppins:600%2C700%2C400%2C500" rel="stylesheet" property="stylesheet" type="text/css" media="all">


    <link rel="icon" href="../upload/cropped-TG-Thumb-32x32.png" sizes="32x32">
    <link rel="icon" href="../upload/cropped-TG-Thumb-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="../upload/cropped-TG-Thumb-180x180.png">
    <meta name="msapplication-TileImage" content="../../../themegoods-cdn-pzbycso8wng.stackpathdns.com/grandconference/demo/upload/cropped-TG-Thumb-270x270.html">


</head>

<body class="home page-template-default page page-id-350 woocommerce-no-js ppb_enable">

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
                <li class="menu-item current-menu-item menu-item-has-children"><a href="index-2.html">Home</a>
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
                                <a id="custom_logo" class="logo_wrapper hidden" href="index.php">
                                    <img src="../upload/logo.png" alt="" >
                                </a>
                            </div>
                        </div>

                        <div id="logo_transparent" class="logo_container">
                            <div class="logo_align">
                                <a id="custom_logo_transparent" class="logo_wrapper default" href="index.php">
                                    <img src="../upload/logo.png" alt="" >
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
                                                <li class="menu-item menu-item-has-children arrow"><a href="#">Forum</a>
                                                    <ul class="sub-menu">
                                                    <?php if (Session::get('id') == TRUE) { ?>
                                                    <?php if (Session::get('roleid') == '1') { ?>
                                                        <li class="menu-item"><a href="Afficher.php">My Forum</a></li>
                                                        <?php }else{ ?>
                                                            <li>
                                                          <a class="nav-link" href="Afficher.php">My Forum </a> </li>
                                                          <?php } ?>
                                                    <?php  } ?>

                                    
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

                                    <a href="ajouterabonnement.php" id="get_ticket" class="button ghost">Get subscription!</a>

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

        <div class="ppb_wrapper  ">
            <div class="one fullwidth ">
                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:#000000;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.5.1 fullwidth mode -->
                    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.5.1">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="../upload/27972070586_73eb8ef975_o.jpg" alt="" title="27972070586_73eb8ef975_o" width="1440" height="960" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina="">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="-15" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; white-space: nowrap; font-size: 70px; line-height: 22px; font-weight: 600; color: rgba(255,45,85,1); font-family:Poppins;text-transform:uppercase;">Billetterie et Réductions</div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="-80" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"delay":1000,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":500,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textalign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 70px; line-height: 22px; font-weight: 700; color: rgba(255,255,255,1); font-family:Poppins;text-transform:uppercase;">Actualité</div>

                                                
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>

                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
            <div class="one withsmallpadding ppb_header " style="padding-bottom:40px !important;text-align:left;padding:70px 0 70px 0;background-color:#000000;color:#ffffff;">
                <div class="standard_wrapper">
                    <div class="page_content_wrapper">
                        <div class="inner">
                            <div style="margin:auto;width:70%">
                                <h2 class="ppb_title" style="color:#ffffff;;text-align:left;">About Theatre 24</h2>
                                <div class="ppb_header_content">
                                    <p>theatre 24 est un site web qui vous permet d'acheter des tickets pour nos pieces</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="footer_bar  ppb_wrapper ">

            <div class="footer_bar_wrapper ">
                <div id="copyright"><a href="#">Copyright Theatre 24</a></div>
                <br class="clear">
                <a id="toTop" href="javascript:;"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </div>

    <div id="side_menu_wrapper" class="overlay_background">
        <a id="close_share" href="javascript:;"><span class="ti-close"></span></a>
    </div>



    <script src='../js/jquery.js'></script>
    <script src='../js/jquery-migrate.min.js'></script>
    <script src='../js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script src='../js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script src="../js/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="../js/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="../js/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="../js/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="../js/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>  
    <script src="../js/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script> 
    <script src="../js/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js"></script>

    <script src='../js/plugins/ui/core.min.js'></script>
    <script src='../js/plugins/jquery.requestAnimationFrame.js'></script>
    <script src='../js/plugins/ilightbox.packed.js'></script>
    <script src='../js/plugins/jquery.easing.js'></script>
    <script src='../js/plugins/waypoints.min.js'></script>
    <script src='../js/plugins/jquery.isotope.js'></script>
    <script src='../js/plugins/jquery.masory.js'></script>
    <script src='../js/plugins/jquery.tooltipster.min.js'></script>
    <script src='../js/plugins/jarallax.js'></script>
    <script src='../js/plugins/jquery.sticky-kit.min.js'></script>
    <script src='../js/plugins/jquery.stellar.min.js'></script>
    <script src='../js/plugins/jquery.cookie.js'></script>
    <script src='../js/plugins/custom_plugins.js'></script>
    <script src='../js/plugins/custom.js'></script>
    <script src='../js/plugins/custom_onepage.js'></script>
    <script src='../js/plugins/jquery.countdown.js'></script>
    <script src='../js/plugins/imagesloaded.min.js'></script>
    <script src='../js/plugins/masonry.min.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCmVhK5ZjYRjzAe-e9ZKS1mA3NBPuViwQ"></script>
    <script src='../js/plugins/jquery.simplegmaps.min.js'></script>
    <script src='../js/plugins/jarallax-video.js'></script>
    <script src='../js/plugins/jquery.cookie.js'></script>
    <script src='../js/plugins/custom_clock.js'></script>
    <script>
        /* <![CDATA[ */
        var mc4wp_forms_config = [];
        /* ]]> */
    </script>
    <script>
        jQuery(document).ready(function() {
            jQuery("#map1566739327259493916").simplegmaps({
                MapOptions: {
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    zoom: 8,
                    scrollwheel: false,
                }
            });
        });
    </script>
    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
    <script>
        (function() {
            function addEventListener(element, event, handler) {
                if (element.addEventListener) {
                    element.addEventListener(event, handler, false);
                } else if (element.attachEvent) {
                    element.attachEvent('on' + event, handler);
                }
            }

            function maybePrefixUrlField() {
                if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                    this.value = "http://" + this.value;
                }
            }

            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields && urlFields.length > 0) {
                for (var j = 0; j < urlFields.length; j++) {
                    addEventListener(urlFields[j], 'blur', maybePrefixUrlField);
                }
            } /* test if browser supports date fields */
            var testInput = document.createElement('input');
            testInput.setAttribute('type', 'date');
            if (testInput.type !== 'date') {

                /* add placeholder & pattern to all date fields */
                var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
                for (var i = 0; i < dateFields.length; i++) {
                    if (!dateFields[i].placeholder) {
                        dateFields[i].placeholder = 'YYYY-MM-DD';
                    }
                    if (!dateFields[i].pattern) {
                        dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                    }
                }
            }

        })();
    </script>
    <script type="text/javascript">
        function revslider_showDoubleJqueryError(sliderID) {
            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
            jQuery(sliderID).show().html(errorMessage);
        }
    </script>    
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script type="text/javascript">
        setREVStartSize({
            c: jQuery('#rev_slider_1_1'),
            gridwidth: [1240],
            gridheight: [800],
            sliderLayout: 'fullwidth'
        });

        var revapi1,
            tpj = jQuery;

        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "js/plugins/revslider/public/assets/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        onHoverStop: "off",
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1240,
                    gridheight: 800,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner3",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }

        }); /*ready*/
    </script>
    <script>
        var htmlDivCss = '	#rev_slider_1_1_wrapper .tp-loader.spinner3 div { background-color: #ff2d55 !important; } ';
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
</body>

<!-- grandconference/  22 Nov 2019 03:50:23 GMT -->
</html>

