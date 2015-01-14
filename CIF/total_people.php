<?php
include 'core/init.php';
include 'includes/overall/header.php';
include 'includes/overall/sideNav.php'; ?>

<body>
<?php
include 'includes/overall/top_nav.php';


?>

    <style type="text/css">
        .tic {
            padding: 40px;
            margin-bottom: 5px;


        }
        .tic>h1 {
            text-align: center;
        }
    </style>
<div class="container">


    <div class="row">
    <div class="col-md-12">
    <div class="tic">


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

                <div class="tic">
                    <h1>Total People in the Database System </h1>
                    <?php

                        if (empty($_GET["personUpdate"]))
                        {
                            $_GET["personUpdate"]= '';
                        }
                        elseif ($_GET["personUpdate"]==77083368)
                        {
                            echo "<div class='alert alert-success'>";
                            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                            echo "Person Updated in this Database System.";
                            echo "</div>";
                        }

                    ?>
                <div class="col-md-12">

                    <div class="table-responsive">

                        <table id="mytable" class="table table-bordered table-striped table-hover">
                            <thead>

                            <th class="col-sm-1" class="text-center"><STRONG><h4>Sl No</h4></STRONG></th>
                            <th class="col-sm-1"><STRONG><h4>Rank</h4></STRONG></th>
                            <th class="col-sm-3"><STRONG><h4>Name</h4></STRONG></th>
                            <th class="col-sm-2"><STRONG><h4>AG No</h4></STRONG></th>
                            <th class="col-sm-3"><STRONG><h4>Action</h4></STRONG></th>
                            </thead>
                            <tbody>

                            <?php
                            include 'core/database/database.php';
                            $pdo = Database::connect();
                            $sql = "SELECT * FROM person_details where status = 'yes'";
                            foreach ($pdo->query($sql) as $row) {
                                echo '<tr>';
                                echo '<span class="pull-center"><td>' . $row['person_id'] . '</td></span>';
                                echo '<td>' . $row['person_rank'] . '</td>';
                                echo '<td>' . $row['person_name'] . '</td>';
                                echo '<td>' . $row['presently_posted_at'] . '</td>';
                                echo '<td width=230px>';
                                echo '<a class="btn btn-default" href="ops_details.php?id=' . $row['person_id'] . '">Read</a>';
                                echo '&nbsp;';
                                echo '<a class="btn btn-success" href="update_people.php?person_id=' . $row['person_id'] . '">Update</a>';
                                echo '&nbsp;';
                                echo '<a class="btn btn-danger" href="delete.php?id=' . $row['person_id'] . '">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                            }


                            Database::disconnect();
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
    </div>
    </div>
                <!-- /container -->
<?php include 'includes/overall/footer.php'; ?>