<?php require_once("../resources/config.php"); ?>
<?php require_once("cart.php"); ?>


<?php include("../resources/tamplates/front/header.php") ?>



<?php

if (isset($_GET['tx'])) {
    $transaction =  $_GET['tx'];
    $amount =  $_GET['amt'];
    $currency =  $_GET['cc'];
    $status = $_GET['st'];

    $query = query("INSERT INTO orders (order_amount, order_transaction, order_status, order_currency) VALUES('{$amount}','{$transaction}','{$status}','{$currency}')");
    confirm($query);
    session_destroy();
} else {
    redirect("index.php");
}

?>



<!-- Page Content -->
<div class="container main-content">

    <h1 class="text-center">THANK YOU!</h1>

</div>
<!--Main Content-->

<!--- FOOTER---->
<?php include("../resources/tamplates/front/footer.php") ?>