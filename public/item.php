<?php require_once("../resources/config.php"); ?>

<?php include("../resources/tamplates/front/header.php") ?>
<?php // include(TEMPLATE_FRONT . DS . "header.php") 
?>



<!-- Page Content -->
<div class="container main-content">

    <!-- Side Navigation -->

    <!-- Categories-->
    <?php include("../resources/tamplates/front/side_nav.php") ?>


    <?php

    $query = query("SELECT * FROM drugs WHERE drug_id = " . escape_string($_GET['id']) . " ");
    confirm($query);
    while ($row = fetch_Array($query)) :



    ?>

        <div class="col-md-9">

            <!--Row For Image and Short Description-->

            <div class="row">

                <div class="col-md-7">
                    <img class="img-responsive" src="../resources/uploads/<?php echo $row['drug_image'] ?>">

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
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <p><?php echo $row['drug_description']; ?>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">

                            <div class="col-md-6">

                                <h3>2 Reviews From </h3>

                                <hr>

                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        Anonymous
                                        <span class="pull-right">10 days ago</span>
                                        <p>This product was great in terms of quality. I would definitely buy another!</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        Anonymous
                                        <span class="pull-right">12 days ago</span>
                                        <p>I've alredy ordered another one!</p>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        Anonymous
                                        <span class="pull-right">15 days ago</span>
                                        <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                                    </div>
                                </div>

                            </div>


                            <div class="col-md-6">
                                <h3>Add A review</h3>

                                <form action="" class="form-inline">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="test" class="form-control">
                                    </div>

                                    <div>
                                        <h3>Your Rating</h3>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
                                    </div>

                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                                    </div>
                                </form>

                            </div>

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