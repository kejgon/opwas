<?php require_once("../../resources/config.php"); ?>

<?php include("header.php") ?>
<?php // include(TEMPLATE_FRONT . DS . "header.php") 
?>



<!-- Page Content -->
<div class="container">



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
                        <h4 class=""><a href="#"><?php echo $row['drug_name'] ?></a> </h4>
                        <h4 class="price"><?php echo "Ksh " . $row['drug_price'] ?></h4>


                        <p class=""><?php echo $row['drug_short_description'] ?></p>

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

        <div class="container" style="padding: 100px;">

            <div role="tabpanel">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                    <li role="presentation"><a href="#how" aria-controls="home" role="tab" data-toggle="tab">How it use</a></li>
                    <li role="presentation"><a href="#precaution" aria-controls="home" role="tab" data-toggle="tab">Precautions</a></li>



                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active tab-paragraph" id="home">
                        <p><?php echo $row['drug_description']; ?>

                    </div>

                    <div role="tabpane1" class="tab-pane tab-paragraph" id="how">
                        <p><?php echo $row['howtouse']; ?>
                    </div>

                    <div role="tabpane1" class="tab-pane tab-paragraph" id="precaution">
                        <p><?php echo $row['precautions']; ?>
                    </div>

                </div>



            </div>



        </div>




        <!--Row for Tab Panel-->

        <!-- END OF THE WHILE LOOP-->
    <?php endwhile; ?>

</div>









<!-- /.container -->

<div class="clearfix"></div>

<div class="fuild-container infos">
    <div class="row">
        <div class="col-md-6">
            <h2>Contact: 07000000000</h2>

        </div>
        <div class="col-md-6">
            <h2>Email:opwas@gmail.com</h2>

        </div>

    </div>
</div>
<!-- /.FOOTER -->
<?php include("footer.php") ?>