<div class="col-md-12">

    <div class="row">
        <h1 class="page-header">
            Add Drugs
        </h1>

        <p class="bg-success"><?php display_Message(); ?></p>
    </div>



    <form method="POST" action="" enctype="multipart/form-data">



        <div class="col-md-8">

            <div class="form-group">
                <label for="product-title">Drug Name </label>
                <input type="text" name="drug_name" class="form-control">

            </div>

            <div class="form-group">
                <label for="product-title">Drug Short Description</label>
                <textarea name="drug_short_descr" id="" cols="15" rows="5" class="form-control"></textarea>
            </div>



            <div class="form-group">
                <label for="product-title">Drug Description</label>
                <textarea name="drug_description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="product-title">How to use?</label>
                <textarea name="howtouse" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="product-title">Precautions</label>
                <textarea name="precautions" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>



            <div class="form-group row">

                <div class="col-xs-3">
                    <label for="product-price">Drug Price</label>
                    <input type="number" name="drug_price" class="form-control" size="60">
                </div>
            </div>







        </div>
        <!--Main Content-->


        <!-- SIDEBAR-->


        <aside id="admin_sidebar" class="col-md-4">


            <div class="form-group">
                <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
                <input type="submit" name="publish" class="btn btn-primary btn-lg" value="Publish">
            </div>


            <!-- Drug Categories-->

            <div class="form-group">
                <label for="drug_category">Drug Category</label>
                <hr>
                <select name="drug_category_id" id="" class="form-control">
                    <option value="">Select Category</option>
                    <?php display_categories_on_add_Drug(); ?>

                </select>
            </div>
            <!-- <div class="form-group">
                <label for="drug_category">Drug Category</label>
                <input type="number" name="drug_category_id" class="form-control">
            </div> -->





            <!-- Drug Brands-->

            <!-- 
            <div class="form-group">
                <label for="drug_brand">Drug Brand</label>
                <select name="drug_brand" id="" class="form-control">
                    <option value="">Select Brand</option>
                </select>
            </div> -->


            <!-- Drug Tags -->


            <div class="form-group">
                <label for="drug_quantity">Drug Quantity</label>
                <input type="number" name="drug_quantity" class="form-control">
            </div>

            <!-- Drug Image -->
            <div class="form-group">
                <label for="image">Drugt Image</label>
                <input name="pictures" type="file" multiple="multiple" />

            </div>



            <!-- </aside> -->
            <!--SIDEBAR-->



    </form>

</div>


<?php add_drugs(); ?>