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

    $person_id = $rows +1;

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
                        <form class="form-horizontal" name="login" action="function/person_entry.php" method="post">
                            <div class="form-group text-center">
                                 <label class="col-sm-3 control-label">Person Id</label>
                                <div class="col-sm-9"> <input type="text" class="form-control heigh " placeholder="Person ID" name="person_id" value="<?php echo $person_id ?>" readonly>
                             </div>
                            </div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person Name</label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Person Name" name="person_name" id="p_name" required></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person Rank </label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person Rank" name="person_rank" id="p_rank" required></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Rank & Name </label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Rank & Name" name="rank_name" id="rank_name" readonly></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Father's Name</label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Father's Name" name="father_name" required></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Permanent Address</label><div class="col-sm-9"><textarea class="form-control  heigh" rows="6" placeholder="Permanent Address" name="address" required></textarea></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Contact Number </label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Contact Number" name="contact_number" required></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Nearest Railway Station </label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Nearest Railway Station" name="nearest_RS" ></div></div>
                                <div id="sandbox-container">
                                    <div class="form-group"><label class="col-sm-3 control-label">Date of Birth</label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Date of Birth" name="DOB" ></div></div>
                                    <div class="form-group"><label class="col-sm-3 control-label">Date of Appointment </label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Date of Appointment" name="DOA" ></div></div>
                                    <div class="form-group"><label class="col-sm-3 control-label">Date of Joinining in CIF</label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Date of Joining in CIF" name="date_of_joining_in_CIF" ></div></div>
                                </div>
                            <!--  please include the class file name autocom !-->
                            <div class="form-group"><label class="col-sm-3 control-label">Educational Qualification </label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Educational Qualification" name="educational_qualification" ></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Blood Group </label><div class="col-sm-9"> <input type="text" class="form-control heigh" placeholder="Blood Group" name="blood_group" required></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Marritial Status </label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Marritial Status" name="marritial_Status" ></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Next of Kin </label><div class="col-sm-9"> <input type="text" class="form-control heigh" placeholder="Next of Kin" name="next_of_kin" ></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Previous Posting </label><div class="col-sm-9"> <input type="text" class="form-control heigh autocom" placeholder="Previous Posting" name="previous_posting" ></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Previous Training Completed </label><div class="col-sm-9">  <input type="text" class="form-control heigh" placeholder="Previous Training Completed" name="previous_training_completed" ></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person to be contacted in case of Emergency </label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Person to be Contacted in Emergency" name="emergency_name" ></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Phone number in case of Emergency </label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Phone Number in case of emergency" name="emergency_number" ></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Relationship with the Person </label><div class="col-sm-9"> <input type="text" class="form-control heigh" placeholder="Relationship" name="emergency_Relationship" ></div></div>

                            <div class="form-group"><label class="col-sm-3 control-label">Presently Posted at </label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Presently Posted at" name="presently_posted_at" ></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Last Posting at </label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Last Posting At" name="last_posting_at" ></div></div>
                             <div id="sandbox-container">
                            <div class="form-group"><label class="col-sm-3 control-label">Last Posting Date </label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Last Posting Date" name="last_posted_date" ></div></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label">Remarks </label><div class="col-sm-9"> <textarea class="form-control  heigh" rows="6" placeholder="Remarks" name="remarks" ></textarea></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Present Status </label>
                                <div class="col-sm-9">
                                <label class="radio-inline">
                                <input type="radio" name="RadioOptions" value="yes"> Active
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="RadioOptions"  value="no"> Not Active
                            </label>
                                    </div>
                                </div>
                            
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

        .form-group {
            text-align: center;
        }

        element {
            display: none;
            top: 38px;
            left: 65px;
            width: 136px;
        }
        .ui-corner-all, .ui-corner-bottom, .ui-corner-right, .ui-corner-br {
            border-bottom-right-radius: 4px;
        }
        .ui-corner-all, .ui-corner-bottom, .ui-corner-left, .ui-corner-bl {
            border-bottom-left-radius: 4px;
        }
        .ui-corner-all, .ui-corner-top, .ui-corner-right, .ui-corner-tr {
            border-top-right-radius: 4px;
        }
        .ui-corner-all, .ui-corner-top, .ui-corner-left, .ui-corner-tl {
            border-top-left-radius: 4px;
        }
        .ui-widget-content {
            border: 1px solid #AAA;
            background: url("imzb/ui-bg_flat_75_ffffff_40x100.png") repeat-x scroll 50% 50% #FFF;
            color: #222;
        }
        .ui-widget {
            font-family: Verdana,Arial,sans-serif;
            font-size: 1.1em;
        }
        .ui-menu {
            list-style: outside none none;
            padding: 2px;
            margin: 0px;
            display: block;
            outline: medium none;
        }
        .ui-autocomplete {
            position: absolute;
            top: 0px;
            left: 0px;
            cursor: default;
        }
        .ui-front {
            z-index: 100;
        }
        .ui-helper-hidden-accessible {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }
.control-label{
    text-align: left !important;
}
    </style>
    <!-- Registration Form - END -->

</div>


<?php include 'includes/overall/footer.php'; ?>
<?php include 'includes/overall/dtpjs.php';?>
<?php
// autocomplete php page include
include 'includes/overall/autocomplete.php';?>
<?php include 'includes/overall/contacanate_name.php';?>
