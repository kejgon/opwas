<!-- Configuration-->

<?php require_once("../../resources/config.php"); ?>


<!-- Header-->
<?php include("header.php") ?>

<?php

if (isset($_SESSION['customer_name'])) {
    $query = query("SELECT * FROM customer WHERE customer_name = '{$_SESSION['customer_name']}'; ");
    confirm($query);

    while ($row = fetch_Array($query)) {

        $customer_name         = escape_string($row['customer_name']);
        $customer_phone   = escape_string($row['customer_phone']);
    }
}

?>



<!-- Contact Section -->

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
                <div class="panel-heading">Account update</div>
                <div class="panel-body ">

                    <p class="bg-success"><?php display_Message(); ?></p>

                    <form method="POST" action="" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="product-title">Name </label>
                                    <input type="text" name="customer_name" value="<?php echo $customer_name; ?>" class="form-control">
                                </div>


                            </div>


                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="drug_quantity">Phone number</label>
                                    <input type="text" name="customer_phone" value="<?php echo $customer_phone; ?>" class="form-control">
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <button name="cust_save" class="form-control btn btn-login">Save</button>
                            </div>
                        </div>


                    </form>

                    <?php update_customer_details(); ?>
                </div>
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


<!--- FOOTER---->
<?php include("footer.php") ?>