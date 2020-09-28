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
                    <li>
                        <a href="shop.php">Pharmacy</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORY <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <?php
                            get_Categories();
                            ?>
                        </ul>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <li>
                        <a href="admin">Admin</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>


                </ul>
                <form method="POST" class="navbar-form navbar-left" action="search.php">
                    <div class="input-group">
                        <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search ... " required>
                        <span class="input-group-btn" id="searchBtn" style="display:none;">
                            <button type="submit" name="search" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
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
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                        </a>
                        <ul class="dropdown-menu">


                            <li class="header">You have <span class="cart_count"><?php ?></span> item(s) in cart</li>
                            <li>
                                <ul class="menu" id="cart_menu">
                                </ul>
                            </li>
                            <li class="footer"><a href="checkout.php">Go to Cart</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="signin.php">signin</a>
                    </li>

                </ul>
            </div>



            <?php

            // SETTING USERS ACCORDING TO CONDITIONS
            // if (!isset($_SESSION['custome_name'])) {

            //     redirect("index.php");
            // }
            // 
            ?>
            <!------------------------------Login user------------------------------------->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php //$_SESSION['customer_name'];
                                                                                                            ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>


        </div>
    </nav>
</header>

<!-- /.navbar-collapse -->