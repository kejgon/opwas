<div class="col-md-12">
    <div class="row">
        <h1 class="page-header">
            All message

        </h1>
    </div>
    <p class="text-center bg-success"><?php display_Message(); ?>
        <div class="row">
            <table class="table table-hover">
                <thead>

                    <tr>
                        <th>message id</th>
                        <!-- <th>Title</th> -->
                        <th>Full Name</th>
                        <th>Subjects</th>
                        <th>Mail From</th>
                        <th>messages</th>
                        <th>Date</th>

                    </tr>
                </thead>
                <tbody>


                    <?php

                    display_Messages();

                    ?>


                </tbody>
            </table>
        </div>
</div>