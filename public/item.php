<?php require_once("../resources/config.php"); ?>

<?php include("../resources/tamplates/front/header.php") ?>
<?php // include(TEMPLATE_FRONT . DS . "header.php") 
?>



<!-- Page Content -->
<div class="container main-content">



    <?php

    $query = query("SELECT * FROM drugs WHERE drug_id = " . escape_string($_GET['id']) . " ");
    confirm($query);
    while ($row = fetch_Array($query)) :



    ?>



        <!--Row For Image and Short Description-->

        <div class="row">

            <div class="col-md-7">
                <img class="img-responsive" src="../resources/uploads/<?php echo $row['drug_image'] ?>" width="200" height="300">

            </div>

            <div class="col-md-5">

                <div class="thumbnail">


                    <div class="caption-full">
                        <h4><a href="#"><?php echo $row['drug_name'] ?></a> </h4>
                        <h4 class=""><?php echo "Ksh " . $row['drug_price'] ?></h4>


                        <p><?php echo $row['drug_short_description'] ?></p>

                        <form action="">
                            <div class="form-group">
                                <a href="../resources/cart.php?add=<?php echo $row['drug_id']; ?>" class="btn btn-primary"> Buy now</a>
                            </div>
                        </form>

                    </div>

                </div>

            </div>


        </div>
        <!--Row For Image and Short Description-->




        <!--Row for Tab Panel-->

        <div class="row">

            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <p><?php echo $row['drug_description']; ?>

                    </div>

                </div>

            </div>


        </div>



        <!--Row for Tab Panel-->




</div>


<!-- END OF THE WHILE LOOP-->
<?php endwhile; ?>
</div>
<!-- /.container -->

<!-- /.FOOTER -->
<?php include("../resources/tamplates/front/footer.php") ?>