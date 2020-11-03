<?php

if (isset($_GET['id'])) {
    $query = query("SELECT * FROM users WHERE user_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while ($row = fetch_Array($query)) {

        $user_name         = escape_string($row['user_name']);
        $user_password   = escape_string($row['user_password']);
        $user_email  = escape_string($row['user_email']);
    }
}

?>



<h1 class="page-header">
    Edit User<br>
    <small>
        <?php echo $user_name; ?>
    </small>
</h1>

<div class="col-md-6 user_image_box">
    <a href="#" data-toggle="modal" data-target="#photo-library"><img class="img-responsive" src="" alt=""></a>
</div>

<form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $user_name; ?>">
        </div>
        <div class="form-group">
            <label for="last name">Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $user_email; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $user_password; ?>">
        </div>
        <div class="form-group">
            <input type="submit" name="update_user" class="btn btn-primary pull-right" value="Update">
        </div>

        <?php update_users(); ?>

    </div>
</form>