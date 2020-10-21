<!-- CONFIGERATIN -->
<?php require_once("../../resources/config.php"); ?>

<!-- HEADER -->
<?php include('../../resources/tamplates/back/back_pharmacist/header.php');
?>



<?php

// SETTING USERS ACCORDING TO CONDITIONS
if (!isset($_SESSION['username']) || $_SESSION['user_role'] != "pharmacist") {

    redirect("../../public");
}
?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- /.row -->


        <?php


        if ($_SERVER['REQUEST_URI'] == "/online-pharmacy/public/pharmacist/" || $_SERVER['REQUEST_URI'] == "/online-pharmacy/public/pharmacist/index.php") {


            include("../../resources/tamplates/back/back_pharmacist/pharmacist_content.php");
        }


        if (isset($_GET['orders'])) {
            include("../../resources/tamplates/back/back_pharmacist/orders.php");
        }

        if (isset($_GET['drugs'])) {
            include("../../resources/tamplates/back/back_pharmacist/drugs.php");
        }


        if (isset($_GET['add_drugs'])) {
            include("../../resources/tamplates/back/back_pharmacist/add_drugs.php");
        }

        if (isset($_GET['edit_drug'])) {
            include("../../resources/tamplates/back/back_pharmacist/edit_drug.php");
        }

        if (isset($_GET['categories'])) {
            include("../../resources/tamplates/back/back_pharmacist/categories.php");
        }


        if (isset($_GET['reports'])) {
            include("../../resources/tamplates/back/back_pharmacist/reports.php");
        }

        if (isset($_GET['messages'])) {
            include("../../resources/tamplates/back/back_pharmacist/messages.php");
        }
        ?>





    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->



<!---------------------------- FOOTER--------------------------------->
<?php include("../../resources/tamplates/back/back_pharmacist/footer.php"); ?>