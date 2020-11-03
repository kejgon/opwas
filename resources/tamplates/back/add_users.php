<?php add_Users(); ?>



<h1 class="page-header">
    Add User
    <small>Page</small>
</h1>

<div class="col-md-6 user_image_box">
    <span id="user_admin" class='fa fa-user fa-4x'></span>
</div>


<form action="" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="userType">User Type</label>
            <select name="user_type" class="form-control" required>
                <option value="admin">admin</option>
                <option value="pharmacist">pharmacist</option>
            </select>
        </div>

        <div class="form-group">
            <!-- <a id="user-id" class="btn btn-danger" href="">Delete</a> -->
            <input type="submit" name="add_user" class="btn btn-primary pull-right" value="Add User">

        </div>
    </div>
</form>