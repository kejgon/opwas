<?php require_once("../resources/config.php"); ?>

<?php include("../resources/tamplates/front/header.php") ?>
<?php // include(TEMPLATE_FRONT . DS . "header.php") 
?>


<!-- Page Content -->
<div class="fulid-container main-content">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer">
        <h1>Pharmacy</h1>

    </header>
</div>
<hr>

<!-- Title -->
<!-- <div class="row">
        <div class="col-lg-12">
            <h3>Latest Features</h3>
        </div>
    </div> -->
<!-- /.row -->
<div class="container">
    <!-- Page Features -->
    <div class="row text-center">

        <?php get_Drugs_In_Shop(); ?>


    </div>
    <!-- /.row -->

    <!--- FOOTER---->
    <?php include("../resources/tamplates/front/footer.php") ?>

    <?php //include(TEMPLATE_FRONT . DS . "footer.php") 
    ?>