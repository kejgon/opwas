<div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
            All Reports

        </h1>
    </div>
    <p class="text-center bg-success"><?php display_Message(); ?>
        <div class="row">
            <table class="table table-hover">
                <thead>

                    <tr>
                        <th>Id</th>
                        <!-- <th>Title</th> -->
                        <th>Drug Id</th>
                        <th>Order Id</th>
                        <th>Price</th>
                        <th>Drug name</th>
                        <th>Drug quantity</th>

                    </tr>
                </thead>
                <tbody>


                    <?php
                    display_Reports();
                    ?>


                </tbody>
            </table>
        </div>
</div>