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
                <div class="panel-heading">Account update</div>
                <div class="panel-body ">
                    <form method="POST" action="" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="product-title">Name </label>
                                    <input type="text" name="drug_name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="product-price">Email</label>
                                    <input type="text" name="drug_name" class="form-control">
                                </div>

                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="drug_quantity">Address</label>
                                    <input type="text" name="drug_name" class="form-control">

                                </div>

                                <div class="form-group">
                                    <label for="drug_quantity">Number</label>
                                    <input type="text" name="drug_name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="drug_quantity">Gender</label>
                                    <input type="text" name="drug_name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button class="form-control btn btn-login">Save</button>
                            </div>
                        </div>


                    </form>



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