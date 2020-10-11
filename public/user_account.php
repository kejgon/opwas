<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>


<!-- Header-->
<?php include("../resources/tamplates/front/header.php") ?>












<!-- Contact Section -->

<div class="container main-content">

    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="list-group">

                    <a href="#" class="list-group-item">Account details</a>
                    <a href="#" class="list-group-item">Update account</a>
                    <a href="#" class="list-group-item">Orders</a>

                </div>
            </div>


        </div>
        <!--/col-3-->
        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">Account Overview</div>
                <div class="panel-body ">

                    <p class="list-group-item">Account Full Name </p>
                    <p class="list-group-item">State</p>
                    <p class="list-group-item">Street</p>


                </div>
            </div>

        </div>


        <div id="push"></div>
    </div>
</div>




<!--swiper slider-->
<div class="container">

    <div class="slider">

        <?php get_Drugs(); ?>
    </div>

</div>


<!-- /.container -->
<!--- FOOTER---->
<?php include("../resources/tamplates/front/footer.php") ?>