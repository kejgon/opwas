<div class="col-lg-12">
    <h1 class="page-header">
        Users

    </h1>
    <p class="bg-success">
        <?php echo display_Message();
        ?>
    </p>

    <a href="add_user.php" class="btn btn-primary">Add User</a>


    <div class="col-md-12">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <!-- <th>Photo</th> -->
                    <th>Username</th>
                    <th>User Password</th>
                    <th>User Email</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>


                <?php display_users(); ?>



            </tbody>
        </table>
        <!--End of Table-->


    </div>



</div>