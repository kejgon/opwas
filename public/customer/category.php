<?php require_once("../../resources/config.php"); ?>

<?php include("header.php") ?>
<?php // include(TEMPLATE_FRONT . DS . "header.php") 
?>


<!-- Page Content -->
<div class="container main-content">

    <!-- Title -->
    <div class="row">
        <!-- Categories-->


        <div class="col-md-12">
            <!-- <h3>Latest Features</h3> -->
            <div class="row text-center">
                <?php get_Drug_Category_customer(); ?>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->


<!--- FOOTER---->
<?php include("footer.php") ?>