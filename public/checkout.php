<?php require_once("../resources/config.php"); ?>
<?php require_once("cart.php"); ?>


<?php include("../resources/tamplates/front/header.php") ?>







<!-- Page Content -->
<div class="container main-content">


    <!-- /.row -->

    <div class="row">
        <p class="text-center bg-danger"><?php display_Message(); ?>
        </p>
        <h1>Checkout</h1>

        <!-- PAYPAL INTERGRATION -->
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="business" value="sb-j88zf2897652@business.example.com">

            <input type="hidden" name="currency_code" value="US">



            <table class="table table-striped checkout-table">
                <thead>
                    <tr>
                        <th>Drug Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Sub-total</th>

                    </tr>
                </thead>
                <tbody>


                    <?php cart(); ?>
                </tbody>
            </table>



            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="upload" alt="PayPal - The safer, easier way to pay online!">

        </form>



        <!--  ***********CART TOTALS*************-->

        <div class="col-xs-4 pull-right ">
            <h2>Cart Totals</h2>

            <table class="table table-bordered" cellspacing="0">

                <tr class="cart-subtotal">
                    <th>Items:</th>
                    <td><span class="amount">
                            <?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "0"; ?>
                        </span></td>
                </tr>
                <tr class="shipping">
                    <th>Shipping and Handling</th>
                    <td>Free Shipping</td>
                </tr>

                <tr class="order-total">
                    <th>Order Total</th>
                    <td><strong><span class="amount">

                                Ksh <?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "00.0"; ?>

                            </span></strong> </td>
                </tr>


                </tbody>

            </table>

        </div><!-- CART TOTALS-->


    </div>
    <!--Main Content-->

    <!--- FOOTER---->
    <?php include("../resources/tamplates/front/footer.php") ?>

    <?php //include(TEMPLATE_FRONT . DS . "footer.php") 
    ?>