<?php add_categories(); ?>
<h1 class="page-header">
    Drugs Categories

</h1>
<p class="bg-success"><?php display_Message(); ?></p>


<div class="col-md-4">
    <form action="" method="post">
        <div class="form-group">
            <label for="category-title">Title</label>
            <input type="text" name="category_name" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
        </div>
    </form>
</div>


<div class="col-md-8">
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php display_drug_categories(); ?>
        </tbody>

    </table>

</div>