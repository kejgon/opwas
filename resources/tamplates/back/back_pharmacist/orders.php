<div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
            All Orders

        </h1>
    </div>
    <p class="text-center bg-success"><?php display_Message(); ?>
        <div class="row">
            <table class="table table-hover">
                <thead>

                    <tr>
                        <th>Id</th>
                        <!-- <th>Title</th> -->
                        <th>Amount</th>
                        <th>transaction</th>
                        <th>Currency</th>
                        <th>Status</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>

                    <?php display_Orders(); ?>


                </tbody>
            </table>
        </div>
</div>