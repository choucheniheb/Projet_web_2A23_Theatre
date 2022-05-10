<!-- Start main left sidebar menu -->
<div class="main-sidebar sidebar-style-3">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="dashboard.php">Dashboard</a><br>
            <a href="index.php">Home</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Pages</li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                <ul class="dropdown-menu">
                    <?php if (Session::get('id') == TRUE) { ?>
                    <?php if (Session::get('roleid') == '1') { ?>
                    <li>

                        <a class="nav-link" href="userList.php"><i class="fas fa-users mr-2"></i>User lists </span></a>
                    </li>
                    <li>

                        <a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user </span></a>
                    </li>
                    <?php  } ?>
                    <li>

                    <a class="nav-link" href="profile.php?id=<?php echo Session::get("id"); ?>"><i class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a>
                    </li>

                    <li>
                    <a class="nav-link" href="?action=logout"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                    </li>
                <?php }else{ ?>

                    <li>
                        <a class="nav-link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Register</a>
                    </li>
                    <li>
                        <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                    </li>

                <?php } ?>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>Blog</span></a>
                <ul class="dropdown-menu">
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
            <?php if (Session::get('id') == TRUE) { ?>
            <?php if (Session::get('roleid') == '1') { ?>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>piece</span></a>
                <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="afficherpiece.php">piece list</a>
                        </li>
                        <li>
                            <a class="nav-link" href="ajouterpiece.php">ajouter un piece </a>
                        </li>
                </ul>
            </li>
            <?php  } ?>
            <?php  } ?>
            <?php if (Session::get('id') == TRUE) { ?>
            <?php if (Session::get('roleid') == '1') { ?>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>acteur</span></a>
                <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="afficheracteurenattente.php">demande en attente</a>
                        </li>
                        <li>
                            <a class="nav-link" href="afficheracteuraccepter.php">notre acteur </a>
                        </li>
                </ul>
            </li>
            <?php  } ?>
            <?php  } ?>
            <?php if (Session::get('id') == TRUE) { ?>
            <?php if (Session::get('roleid') == '1') { ?>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>reclamation</span></a>
                <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="listRec.php">reclamation</a>
                        </li>
                </ul>
            </li>
            <?php  } ?>
            <?php  } ?>
            <?php if (Session::get('id') == TRUE) { ?>
            <?php if (Session::get('roleid') == '1') { ?>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>subscription</span></a>
                <ul class="dropdown-menu">
                        <li>
                            <a class="nav-link" href="afficherticket.php">ticket list</a>
                        </li>
                        <li>
                            <a class="nav-link" href="afficherabonnement.php">abonnement list </a>
                        </li>
                </ul>
            </li>
            <?php  } ?>
            <?php  } ?>
            
        </ul>
        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="export_excel.php" class="btn btn-primary btn-lg btn-block btn-icon-split"><i class="fas fa-rocket"></i> export piece excel</a>
        </div>
    </aside>
</div>