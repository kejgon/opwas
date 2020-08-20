<!-- CONFIGERATIN -->
<?php require_once("../../resources/config.php"); ?>

<!-- HEADER -->
<?php include('../../resources/tamplates/back/header.php'); ?>



<?php

// SETTING USERS ACCORDING TO CONDITIONS
if (!isset($_SESSION['username'])) {

    redirect("../../public");
}
?>

<div id="page-wrapper">

    <div class="container-fluid">


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

        if (isset($_GET['edit_drug'])) {
            include("../../resources/tamplates/back/edit_drug.php");
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