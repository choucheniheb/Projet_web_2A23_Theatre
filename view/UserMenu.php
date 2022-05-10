<li class="dropdown">
    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
    <div class="d-sm-none d-lg-inline-block">Hi,    <?php
                                                    $username = Session::get('username');
                                                    if (isset($username)) {
                                                    echo $username;
                                                    }else {echo "User";}
                                                    ?></div></a>
    <div class="dropdown-menu dropdown-menu-right">
    <?php if (Session::get('id') == TRUE) { ?>
        <?php if (Session::get('roleid') == '1') { ?>
        

                <a class="nav-link" href="index.php"><i class="fas fa-users mr-2"></i>User lists </span></a>
        
        

            <a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add user </span></a>
        
        <?php  } ?>
        

            <a class="nav-link" href="profile.php?id=<?php echo Session::get("id"); ?>"><i class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a>
        
            <a class="nav-link" href="?action=logout"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
        
        <?php }else{ ?>

            

        
            <a class="nav-link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Register</a>
            
            
            <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
            

        <?php } ?>
    </div>
</li>