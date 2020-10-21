<?php

if (isset($_GET['id'])) {
    $query = query("SELECT * FROM drugs WHERE drug_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while ($row = fetch_Array($query)) {

        $drug_name         = escape_string($row['drug_name']);
        $drug_short_desc   = escape_string($row['drug_short_description']);
        $drug_description  = escape_string($row['drug_description']);
        $howtouse  = escape_string($row['howtouse']);
        $precautions  = escape_string($row['precautions']);
        $drug_price        = escape_string($row['drug_price']);
        $drug_quantity     = escape_string($row['drug_quantity']);
        $drug_category_id  = escape_string($row['drug_category_id']);
        $drug_image        = escape_string($row['drug_image']);
    }
}

?>





<div class="col-md-12">

    <div class="row">
        <h1 class="page-header">
            Edit Drugs
        </h1>

        <p class="bg-success"><?php display_Message(); ?></p>
    </div>



    <form method="POST" action="" enctype="multipart/form-data">



        <div class="col-md-8">

            <div class="form-group">
                <label for="product-title">Drug Name </label>
                <input type="text" name="drug_name" class="form-control" value="<?php echo $drug_name; ?>" />

            </div>

            <div class="form-group">
                <label for="product-title">Drug Short Description</label>
                <textarea name="drug_short_descr" id="" cols="15" rows="5" class="form-control"><?php echo $drug_short_desc; ?></textarea>
            </div>



            <div class="form-group">
                <label for="product-title">Drug Description</label>
                <textarea name="drug_description" id="" cols="30" rows="10" class="form-control"><?php echo $drug_description; ?></textarea>
            </div>
            <div class="form-group">
                <label for="product-title">How to use</label>
                <textarea name="howtouse" id="" cols="30" rows="10" class="form-control"><?php echo $howtouse; ?></textarea>
            </div>
            <div class="form-group">
                <label for="product-title">Precautions</label>
                <textarea name="precautions" id="" cols="30" rows="10" class="form-control"><?php echo $precautions; ?></textarea>
            </div>



            <div class="form-group row">

                <div class="col-xs-3">
                    <label for="product-price">Drug Price</label>
                    <input type="number" name="drug_price" class="form-control" size="60" value="<?php echo $drug_price; ?>">
                </div>
            </div>
        </div>
        <!--Main Content-->


        <!-- SIDEBAR-->


        <aside id="admin_sidebar" class="col-md-4">


            <div class="form-group">
                <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
                <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
            </div>


            <!-- Drug Categories-->

            <div class="form-group">
                <label for="drug_category">Drug Category</label>
                <hr>
                <select name="drug_category_id" id="" class="form-control">
                    <option value="<?php echo $drug_category_id; ?>"><?php echo display_Drugs_Category_name($drug_category_id); ?></option>
                    <?php display_categories_on_add_Drug();
                    ?>

                </select>
            </div>



            <div class="form-group">
                <label for="drug_quantity">Drug Quantity</label>
                <input type="number" name="drug_quantity" class="form-control" value="<?php echo $drug_quantity; ?>">
            </div>

            <!-- Drug Image -->
            <div class="form-group">
                <label for="image">Drugt Image</label>
                <input name="pictures" type="file" multiple="multiple" />
                <img src="../../resources/uploads/<?php echo $drug_image; ?>">

            </div>


            <?php update_Drugs(); ?>

    </form>

</div>