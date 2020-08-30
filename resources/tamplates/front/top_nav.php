<!-- <div class="container-fluid"> -->
<!-- Brand and toggle get grouped for better mobile display -->
<!-- <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="img/icons/icons8-hand-with-a-pill-96.png" width="50">OPWAS</a>
    </div>
   Collect the nav links, forms, and other content for toggling -->
<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li>
                <a href="shop.php">Shop</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
            <li>
                <a href="admin">Admin</a>
            </li>

            <li>
                <a href="checkout.php"><span class="glyphicon glyphicon-shopping-cart"></span></a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>

        </ul>


    </div> -->
<header class="main-header">

    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand" href="index.php">OPWAS</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="admin">Admin</a>
                    </li>
                    <li>
                        <a href="checkout.php"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORY <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php
                            get_Categories();
                            ?>
                        </ul>
                    </li>
                </ul>
                <form method="POST" class="navbar-form navbar-left" action="search.php">
                    <div class="input-group">
                        <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Product" required>
                        <span class="input-group-btn" id="searchBtn" style="display:none;">
                            <button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="label label-success cart_count"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
                            <li>
                                <ul class="menu" id="cart_menu">
                                </ul>
                            </li>
                            <li class="footer"><a href="cart_view.php">Go to Cart</a></li>
                        </ul>
                    </li>
                    <?php
                    // if(isset($_SESSION['user'])){
                    //   $image = (!empty($user['photo'])) ? 'images/'.$user['photo'] : 'images/profile.jpg';
                    //   echo '
                    //     <li class="dropdown user user-menu">
                    //       <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    //         <img src="'.$image.'" class="user-image" alt="User Image">
                    //         <span class="hidden-xs">'.$user['firstname'].' '.$user['lastname'].'</span>
                    //       </a>
                    //       <ul class="dropdown-menu">
                    //         <!-- User image -->
                    //         <li class="user-header">
                    //           <img src="'.$image.'" class="img-circle" alt="User Image">

                    //           <p>
                    //             '.$user['firstname'].' '.$user['lastname'].'
                    //             <small>Member since '.date('M. Y', strtotime($user['created_on'])).'</small>
                    //           </p>
                    //         </li>
                    //         <li class="user-footer">
                    //           <div class="pull-left">
                    //             <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                    //           </div>
                    //           <div class="pull-right">
                    //             <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    //           </div>
                    //         </li>
                    //       </ul>
                    //     </li>
                    //   ';
                    // }
                    // else{
                    //   echo "
                    //     <li><a href='login.php'>LOGIN</a></li>
                    //     <li><a href='signup.php'>SIGNUP</a></li>
                    //   ";
                    // }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- /.navbar-collapse -->