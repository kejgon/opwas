<!-- Configuration-->

<?php require_once("../../resources/config.php"); ?>


<!-- Header-->
<?php include("header.php") ?>




<div class="container main-content">

    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-default">
                <div class="list-group">

                    <a href="user_account.php" class="list-group-item">Account details</a>
                    <a href="update_account.php" class="list-group-item">Update account</a>
                    <a href="#" class="list-group-item">Orders</a>

                </div>
            </div>
        </div>
        <!--/col-3-->
        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">Account Overview</div>
                <?php customer_Details(); ?>
            </div>
        </div>
        <div id="push"></div>
    </div>
</div>




<!--swiper slider-->
<div class="container">
    <div class="slider">
        <?php get_Drugs_in_customer(); ?>
    </div>
</div>


<!-- /.container -->
<!--- FOOTER---->
<?php include("footer.php") ?>