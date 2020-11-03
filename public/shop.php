<?php require_once("../resources/config.php"); ?>
<?php include("../resources/tamplates/front/header.php") ?>



<!-- Page Content -->
<div class="fulid-container main-content">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row text-center">
                <h1>Pharmacy</h1>
            </div>
        </div>
    </div>
</div>
<hr>

<!-- /.row -->
<div class="container">
    <!-- Page Features -->
    <div class="row shop">
        <?php get_Drugs_In_Shop(); ?>
    </div>
</div>
<!-- /.row -->

<!--- FOOTER---->
<?php include("../resources/tamplates/front/footer.php") ?>