<?php require_once("../../resources/config.php"); ?>

<?php include("header.php") ?>


<?php
if (!isset($_SESSION['customer_name'])) {

    redirect("../../public");
}
?>



<!-- Page Content -->
<div class="fulid-container main-content">

    <div class="row">

        <!-- Categories-->
        <div class="col-md-12">

            <div class="row carousel-holder">

                <div class="col-md-12">
                    <!-- Sliders -->
                    <?php include("sliders.php") ?>
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

    <div class="slider">

        <?php get_Drugs_in_customer(); ?>
    </div>

</div>


<!---- SERVICES------>

<div class="fuild-container" id="full-features">
    <div class="container" id="features">
        <div class="row">

            <div class=" features-box col-md-3">
                <div class="box-f">
                    <p class="text-center">
                        Search for your medication online by name or condition. You can also call</p>
                </div>
            </div>


            <div class="features-box col-md-3">
                <div class="box-f">
                    <p class="text-center">
                        Place your order online or by phone or by live chat.</p>
                </div>
            </div>


            <div class="features-box col-md-3">
                <div class="box-f">
                    <p class="text-center">Send us your (Rx) prescription to process your order.</p>
                </div>
            </div>

            <div class="features-box col-md-3">
                <div class="box-f">
                    <p class="text-center">Order complete! wait for your the medication to be delivered.</p>
                </div>
            </div>

        </div>

    </div>
</div>



<div class="fuild-container infos">
    <div class="row">
        <div class="col-md-6">
            <h2>Contact: 07000000000</h2>

        </div>
        <div class="col-md-6">
            <h2>Email:opwas@gmail.com</h2>

        </div>

    </div>
</div>
<!--- FOOTER---->
<?php include("footer.php") ?>

<?php //include(TEMPLATE_FRONT . DS . "footer.php") 
?>