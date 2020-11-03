<?php require_once("../resources/config.php"); ?>

<?php include("../resources/tamplates/front/header.php") ?>
<?php // include(TEMPLATE_FRONT . DS . "header.php") 
?>




<div class="container ">
    <div class="login-form">
        <h1>Login</h1>
        <img src="img/icons/icons8-hand-with-a-pill-96.png" alt="hand-pill">

        <form class="text-center" action="" method="post">

            <p class="text-center bg-warning"><?php display_Message(); ?></p>

            <div class="form-group"><label for="">
                    <input type="text" name="username" class="form-control" placeholder="Username"></label>
            </div>
            <div class="form-group"><label for="password">
                    <input type="password" name="password" class="form-control" placeholder="Password"></label>
            </div>

            <div class="form-group"><label for="user_role">User Role</label><br>
                Admin <input type="radio" name="user_role" value="admin">&nbsp; &nbsp;
                Pharmacist
                <input type="radio" name="user_role" value="pharmacist">
            </div>

            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>

    <!-- THE LOGIN FUNCTION -->
    <?php login_User(); ?>

</div>


</div>
<!-- /.container -->