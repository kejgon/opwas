<!-- Configuration-->
<?php require_once("../resources/config.php"); ?>
<!-- Header-->
<?php include("../resources/tamplates/front/header.php") ?>


<div class="container main-content">

    <!-- Title -->
    <div class="row">
        <!-- Categories-->
        <div class="col-md-12">
            <!-- <h3>Latest Features</h3> -->
            <div class="row text-center">

                <?php
                search_all_drugs()
                ?>

            </div>
        </div>
    </div>
</div>
<!-- /.row -->

<!--- FOOTER---->
<?php include("../resources/tamplates/front/footer.php") ?>

<?php //include(TEMPLATE_FRONT . DS . "footer.php") 
?>