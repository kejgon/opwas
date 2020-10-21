<?php require_once("../../resources/config.php"); ?>

<?php include("header.php") ?>
<?php // include(TEMPLATE_FRONT . DS . "header.php") 
?>


<!-- Page Content -->
<div class="fulid-container main-content">

    <!-- Jumbotron Header -->
    <!-- <header class="jumbotron hero-spacer">
        <h1>Pharmacy</h1>

    </header> -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row text-center">
                <h1>Pharmacy</h1>
            </div>
        </div>
    </div>
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
    <div class="row ">

        <?php get_Drugs_In_Shop_customer(); ?>


    </div>
</div>
<!-- /.row -->

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