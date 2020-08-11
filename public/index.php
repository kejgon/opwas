<?php require_once("../resources/config.php"); ?>

<?php include("../resources/tamplates/front/header.php") ?>






<!-- Page Content -->
<div class="container main-content">

    <div class="row">

        <!-- Categories-->
        <?php include("../resources/tamplates/front/side_nav.php") ?>
        <div class="col-md-10">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <!-- Sliders -->
                    <?php include("../resources/tamplates/front/sliders.php") ?>
                </div>

            </div>



            <!-- DRUGS -->
            <div class="row">

                <?php get_Drugs(); ?>

            </div>
            <!-- DRUGS ENDS -->


        </div>

    </div>

</div>
<!-- /.container -->


<!---- SERVICES------>

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
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>

        <div class="features-box col-md-4">
            <div class="feature-image">
                <img class="img" src="img/icons/delivery-man.png" alt="">
            </div>
            <div class="feature-content">
                <h3 class="section-heading">DELIVERY</h3>
                <p class="text-center">is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>


        <div class="features-box col-md-4">
            <div class="feature-image">
                <img class="img" src="img/icons/customer-service.png" alt="">
            </div>
            <div class="feature-content">
                <h3 class="section-heading">Customer Service</h3>
                <p class="text-center">is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>

    </div>
</div>

<!--- FOOTER---->
<?php include("../resources/tamplates/front/footer.php") ?>

<?php //include(TEMPLATE_FRONT . DS . "footer.php") 
?>