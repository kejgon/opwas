<?php require_once("../../resources/config.php"); ?>

<?php include("header.php") ?>



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


<div class="container">
    <!-- Page Features -->
    <div class="row shop">
        <?php get_Drugs_In_Shop_customer(); ?>
    </div>
</div>
<!-- /.row -->




<!--- FOOTER---->
<?php include("footer.php") ?>