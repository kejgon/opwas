<div class="row">

    <h1 class="page-header">
        All Drugs

    </h1>
    <p class="text-center bg-success"><?php display_Message(); ?>

        <table class="table table-hover">


            <thead>

                <tr>
                    <th>Id</th>
                    <th>Drug name</th>
                    <th>Drug brif Descr</th>
                    <th>Drug description</th>
                    <th>Drug category Id</th>
                    <th>Drug price</th>
                    <th>Drug quantity</th>
                    <th>Delete</th>
                    <th>Edite</th>

                </tr>
            </thead>
            <tbody>

                <?php display_all_drug(); ?>



            </tbody>
        </table>

</div>