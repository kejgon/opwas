<!-- CONFIGERATIN -->
<?php require_once("../../resources/config.php"); ?>

<!-- HEADER -->
<?php include('../../resources/tamplates/back/header.php'); ?>



<?php

if (!isset($_SESSION['username'])) {

    redirect("../../public");
}
?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Dashboard <small>Statistics Overview</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


        <?php


        if ($_SERVER['REQUEST_URI'] == "/Online-Pharmacy/public/admin/" || $_SERVER['REQUEST_URI'] == "/Online-Pharmacy/public/admin/index.php") {

            include("../../resources/tamplates/back/admin_content.php");
        }


        if (isset($_GET['orders'])) {
            include("../../resources/tamplates/back/orders.php");
        }

        if (isset($_GET['drugs'])) {
            include("../../resources/tamplates/back/drugs.php");
        }


        if (isset($_GET['add_drugs'])) {
            include("../../resources/tamplates/back/add_drugs.php");
        }

        if (isset($_GET['categories'])) {
            include("../../resources/tamplates/back/categories.php");
        }

        if (isset($_GET['users'])) {
            include("../../resources/tamplates/back/users.php");
        }

        ?>




        <!-- ADMIN-CONTENTS -->
        <?php //include("../../resources/tamplates/back/admin_content.php"); 
        ?>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->



<!---------------------------- FOOTER--------------------------------->
<?php include("../../resources/tamplates/back/footer.php"); ?>