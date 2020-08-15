<div class="col-md-12">

    <div class="row">
        <h1 class="page-header">
            Add Drugs

        </h1>
    </div>



    <form action="" method="post" enctype="multipart/form-data">


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


            <!-- Product Categories-->

            <div class="form-group">
                <label for="drug_category">Drug Category</label>
                <hr>
                <select name="drug_category" id="" class="form-control">
                    <option value="">Select Category</option>

                </select>


            </div>





            <!-- Product Brands-->


            <div class="form-group">
                <label for="drug_brand">Drug Brand</label>
                <select name="drug_brand" id="" class="form-control">
                    <option value="">Select Brand</option>
                </select>
            </div>


            <!-- Product Tags -->


            <div class="form-group">
                <label for="drug_tags">Drug Keywords</label>
                <hr>
                <input type="text" name="drug_tags" class="form-control">
            </div>

            <!-- Product Image -->
            <div class="form-group">
                <label for="drug_img">Drugt Image</label>
                <input type="file" name="file">

            </div>



        </aside>
        <!--SIDEBAR-->



    </form>