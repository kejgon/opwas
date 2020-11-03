<?php require_once("../resources/config.php"); ?>

<?php include("../resources/tamplates/front/header.php") ?>



<!-- Page Content -->
<div class="fulid-container main-content">

    <div class="row">

        <!-- Categories-->
        <div class="col-md-12">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <!-- Sliders -->
                    <?php include("../resources/tamplates/front/sliders.php") ?>
                </div>

            </div>
        </div>
    </div>
</div>



<!--swiper slider-->
<div class="fuild-container">

    <div class="slider">

        <?php get_Drugs(); ?>
    </div>

</div>


<!---- SERVICES------>

<div class="fuild-container">
    <div class="container">
        <div class="row mx-3" id="features">
            <div class="col-md-4 px-4 mb-4">

                <a href="#" class="thumbnail">
                    <img src="../public/img/shopping-cart-colour-thumbnail.png" class="img-fluid" alt="smaple image">
                </a>

            </div>
            <div class="col-md-4 px-4 mb-4">

                <a href="#" class="thumbnail">
                    <img src="../public/img/thumbnail.png" class="img-fluid" alt="smaple image">
                </a>

            </div>
            <div class="col-md-4 px-4 mb-4">

                <a href="#" class="thumbnail">
                    <img src="../public/img/shipping-package-colour-thumbnail.png" class="img-fluid" alt="smaple image">
                </a>

            </div>
        </div>

    </div>
</div>

<!--- FOOTER---->
<?php include("../resources/tamplates/front/footer.php") ?>

<?php //include(TEMPLATE_FRONT . DS . "footer.php") 
?>