<?php require_once("../resources/config.php"); ?>

<?php include("../resources/tamplates/front/header.php") ?>
<?php // include(TEMPLATE_FRONT . DS . "header.php") 
?>


<!-- Page Content -->
<div class="container main-content">

    <!-- Title -->
    <div class="row">
        <!-- Categories-->
        <?php include("../resources/tamplates/front/side_nav.php") ?>


        <div class="col-md-10">
            <!-- <h3>Latest Features</h3> -->
            <div class="row text-center">

                <?php get_Drug_Category(); ?>


            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->

    <!-- /.row -->

    <!--- FOOTER---->
    <?php include("../resources/tamplates/front/footer.php") ?>

    <?php //include(TEMPLATE_FRONT . DS . "footer.php") 
    ?>