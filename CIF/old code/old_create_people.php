<?php
include 'core/init.php';
include 'includes/overall/header.php';
include 'core/database/database.php';
include 'includes/overall/top_nav.php';
include 'includes/overall/sideNav.php';
include 'includes/overall/dtcss.php';?>
<body>



<div class="container">

    <div class="page-header">
        <h1>New Person Entry <small>Details Form</small></h1>
    </div>
    <?php

    $pdo = Database::connect();


    $result = $pdo->query("SELECT * from person_details");


    $rows= $result->rowCount();


    Database::disconnect();

    $personid = $rows +1;

    ?>
    <!-- Registration Form - START -->
    <div class="container" id="container1">
        <div class="row centered-form">
            <div class="col-xs-4 col-sm-4 col-md-8 col-sm-offset-2 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php

                        if (empty($_GET["personAdded"]))
                        {
                            $_GET["personAdded"]= '';
                        }
                        elseif ($_GET["personAdded"]==77083368)
                        {
                            echo "<div class='alert alert-success'>";
                            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
                            echo "Person added in this Database System.";
                            echo "</div>";
                        }

                        ?>
                        <h3 class="panel-title text-center">Please Enter the New Person Details</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" name="login" action="../function/person_entry.php" method="post">
                            <input type="text" class="form-control heigh" placeholder="Person ID" name="person_id" value="<?php echo $personid ?>" required>

                                <input type="text" class="form-control heigh" placeholder="Person Name" name="person_name" id="p_name" required>

                            <input type="text" class="form-control heigh" placeholder="Person Rank" name="person_rank" id="p_rank" required>
                            <input type="text" class="form-control heigh" placeholder="Rank & Name" name="rank_name" id="rank_name" readonly>
                            <input type="text" class="form-control heigh" placeholder="Father's Name" name="father_name" required>
                            <input type="text" class="form-control heigh" placeholder="Permanent Address" name="address" required>
                            <input type="text" class="form-control heigh" placeholder="Contact Number" name="contact_number" required>
                            <input type="text" class="form-control heigh" placeholder="Nearest Railway Station" name="nearest_RS" >
                                <div id="sandbox-container">
                                    <input type="text" class="form-control heigh" placeholder="Date of Birth" name="DOB" >
                                    <input type="text" class="form-control heigh" placeholder="Date of Appointment in CIF" name="DOA" >
                                    <input type="text" class="form-control heigh" placeholder="Date of Joining in CIF" name="date_of_joining_in_CIF" >
                                </div>

                            <input type="text" class="form-control heigh" placeholder="Educational Qualification" name="educational_qualification" >
                            <input type="text" class="form-control heigh" placeholder="Blood Group" name="blood_group" required>
                            <input type="text" class="form-control heigh" placeholder="Marritial Status" name="marritial_Status" >
                            <input type="text" class="form-control heigh" placeholder="Next of Kin" name="next_of_kin" >
                            <input type="text" class="form-control heigh" placeholder="Previous Posting" name="previous_posting" >
                            <input type="text" class="form-control heigh" placeholder="Previous Training Completed" name="previous_training_completed" >
                            <input type="text" class="form-control heigh" placeholder="Person to be Contacted in Emergency" name="emergency_name" >
                            <input type="text" class="form-control heigh" placeholder="Phone Number in case of emergency" name="emergency_number" >
                            <input type="text" class="form-control heigh" placeholder="Relationship" name="emergency_Relationship" >


                            <input type="text" class="form-control heigh" placeholder="Presently Posted at" name="presently_posted_at" >
                            <input type="text" class="form-control heigh" placeholder="Last Posting At" name="last_posting_at" >
                            <div id="sandbox-container">
                            <input type="text" class="form-control heigh" placeholder="Last Posting Date" name="last_posted_date" >
                            </div>

                                <textarea class="form-control  heigh" rows="6" placeholder="Remarks" name="remarks" ></textarea>
                            Present Status :
                            <label class="radio-inline">
                                <input type="radio" name="RadioOptions" value="yes"> Active
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="RadioOptions"  value="no"> Not Active
                            </label>
                            <input type="file" id="photo" >
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <input type="submit" value="Register" class="btn btn-primary btn-block">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="cancel" value="Cancel" class="btn btn-block btn-danger ">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .heigh {
           height: 50px;
        }
        #container1 {
            background-color: #e2dada;
        }
        .page-header {
            padding-top: 20px;
        }
        .centered-form {
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .centered-form .panel {
            background: rgba(255, 255, 255, 0.8);
            box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
        }
    </style>
    <!-- Registration Form - END -->

</div>


<?php include 'includes/overall/footer.php'; ?>
<?php include 'includes/overall/dtpjs.php';?>
<?php include 'includes/overall/contacanate_name.php';?>
