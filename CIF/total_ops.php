<div class="container">
    <div class="row">


        <style>


            th {
                text-align: center;
            }

            td {
                text-align: center;
            }

            .container {
                padding-right: 0px;
                padding-left: 0px;
                margin-right: 0px;
                margin-left: 0px
            }
        </style>
        <div class="container">
            <div class="row">


                <div class="col-md-12">

                    <div class="table-responsive">

                        <table id="mytable" class="table table-bordered table-striped ">
                            <thead>

                            <th class="col-sm-1" class="text-center"><STRONG><h4>Operation Number</h4></STRONG></th>
                            <th class="col-sm-3"><STRONG><h4>Operation Name</h4></STRONG></th>
                            <th class="col-sm-3"><STRONG><h4>OPS Date</h4></STRONG></th>
                            <th class="col-sm-2"><STRONG><h4>AG No</h4></STRONG></th>
                            <th class="col-sm-3"><STRONG><h4>Action</h4></STRONG></th>
                            </thead>
                            <tbody>

                            <?php
                            include 'core/database/database.php';

                            // Begin of paginator

                            // page is the current page, if there's nothing set, default is page 1
                            $page = isset($_GET['page']) ? $_GET['page'] : 1;

                            // set records or rows of data per page
                            $recordsPerPage = 20;

                            // calculate for the query LIMIT clause
                            $fromRecordNum = ($recordsPerPage * $page) - $recordsPerPage;
                            // End of paginator

                            // Begining of PDO connection & table data
                            $pdo = Database::connect();
                            $sql = "SELECT * FROM operations ORDER BY
			                id desc LIMIT {$fromRecordNum}, {$recordsPerPage}";
                            foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<span class="pull-center"><td>' . $row['id'] . '</td></span>';
                                echo '<td>' . $row['OPS_NAME'] . '</td>';
                                echo '<td>' . $row['OPS_DATE'] . '</td>';
                                echo '<td>' . $row['AG-NO'] . '</td>';
                                echo '<td width=230px>';
                                echo '<a class="btn btn-default" href="ops_details.php?id=' . $row['id'] . '">Read</a>';
                                echo '&nbsp;';
                                echo '<a class="btn btn-success" href="update.php?id=' . $row['id'] . '">Update</a>';
                                echo '&nbsp;';
                                echo '<a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                            }


                            Database::disconnect();
                            ?>
                            </tbody>
                        </table>

                       <!--include the paginator file -->
                        <?php include 'paginator.php'; ?>
                    </div>
                </div>
                <!-- /container -->