<?php require_once("../resources/config.php"); ?>

<?php include("../resources/tamplates/front/header.php") ?>






<!-- Page Content -->
<div class="fulid-container main-content">

    <div class="row">

        <!-- Categories-->
        <?php include("../resources/tamplates/front/side_nav.php") ?>
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



<!-- CAREDS SLIDER ------>



<!-- CAREDS SLIDER -->



<!-- /.container -->






<!--swiper slider-->
<div class="fuild-container">
    <h1>Featured Mediciences</h1>
    <div class="slider">

        <?php get_Drugs(); ?>
    </div>

</div>


<!---- SERVICES------>

<div class="fuild-container" id="full-features">
    <div class="container" id="features">
        <div class="row">
            <h1 class="big-heading">OPWAS Services</h1>
            <hr class="hr">

            <div class=" features-box col-md-4">
                <div class="feature-image text-center">
                    <img class="img " src="img/icons/online-order (1).png" alt="">
                </div>
                <div class="feature-content">
                    <h3 class="section-heading"> Online Service</h3>
                    <p class="text-center">is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
            </div>

            <div class="features-box col-md-4">
                <div class="feature-image">
                    <img class="img" src="img/icons/delivery-man.png" alt="">
                </div>
                <div class="feature-content">
                    <h3 class="section-heading">DELIVERY</h3>
                    <p class="text-center">is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
            </div>



            <div class="features-box col-md-4">
                <div class="feature-image">
                    <img class="img" src="img/icons/customer-service.png" alt="">
                </div>
                <div class="feature-content">
                    <h3 class="section-heading">Customer Service</h3>
                    <p class="text-center">is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<!--- FOOTER---->
<?php include("../resources/tamplates/front/footer.php") ?>

<?php //include(TEMPLATE_FRONT . DS . "footer.php") 
?>