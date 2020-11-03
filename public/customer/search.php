<!-- Configuration-->

<?php require_once("../../resources/config.php"); ?>


<!-- Header-->
<?php include("header.php") ?>





<!-- Page Content -->
<div class="container main-content">

    <div class="row">
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

<!--- FOOTER---->
<?php include("footer.php") ?>