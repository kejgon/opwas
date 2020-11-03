<?php require_once("../resources/config.php"); ?>

<?php include("../resources/tamplates/front/header.php") ?>




<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="" method="post" role="form" style="display: block;">
                                <p class="text-center bg-success" style="font-size: 16px;"><?php display_Message(); ?></p>

                                <div class="form-group">
                                    <input type="text" name="fname" id="name" tabindex="1" class="form-control" placeholder="Name" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="logpassword" tabindex="2" class="form-control" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>


                                <?php customer_login() ?>
                            </form>
                            <form id="register-form" action="signin.php" name="valForm" method="post" role="form" style="display: none;" onsubmit="return submitFormValidation();">

                                <div class="form-group">
                                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Full name">
                                    <small id="name_error"></small>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address">
                                    <small id="email_error"> </small>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number">
                                    <small id="phone_error"></small>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    <small id="password_error"> </small>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" onclick=" " name="register-submit" id="register-submit" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <?php customer_registration() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {

        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });

    });
</script>

<!--- FOOTER---->
<?php include("../resources/tamplates/front/footer.php") ?>

<?php //include(TEMPLATE_FRONT . DS . "footer.php") 
?>