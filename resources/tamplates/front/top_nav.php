<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">OPWAS</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="shop.php">Pharmacy</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <?php
                        get_Categories();
                        ?>
                    </ul>
                </li>

                <li>
                    <a href="contact.php">Contact</a>
                </li>

                <form method="POST" class="navbar-form navbar-left" action="search.php">
                    <div class="input-group">
                        <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search ... " required>
                        <span class="input-group-btn" id="searchBtn" style="display:none;">
                            <button type="submit" name="search" class="btn btn-default btn-flat"><i class="fa fa-search"></i> </button>
                        </span>
                    </div>
                </form>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="signin.php"><span class=""></span> Login</a></li>
            </ul>

        </div>
    </div>
</nav>

<!-- /.navbar-collapse -->