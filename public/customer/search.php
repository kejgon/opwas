<!-- Configuration-->

<?php require_once("../../resources/config.php"); ?>


<!-- Header-->
<?php include("header.php") ?>





<!-- Page Content -->
<div class="container main-content">

    <!-- Title -->
    <div class="row">
        <!-- Categories-->


        <div class="col-md-12">
            <!-- <h3>Latest Features</h3> -->
            <div class="row text-center">


                <?php

                search_all_drugs_customer();
                ?>


            </div>
        </div>
    </div>
</div>
<!-- /.row -->

<!-- Page Features -->

<!-- /.row -->
<div class="clearfix"></div>

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