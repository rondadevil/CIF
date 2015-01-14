<?php

include 'includes/overall/header.php';
include 'core/database/database.php';
include 'includes/overall/top_nav.php';
include 'includes/overall/sideNav.php';
include 'includes/overall/dtcss.php';?>
<body>



<div class="container">

    <div class="page-header">
        <h1>New Assault Group <small>Details Form</small></h1>
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
                            echo "AG details added in this Database System.";
                            echo "</div>";
                        }

                        ?>
                        <h3 class="panel-title text-center">Please Enter the New AG Details</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" name="login" action="function/person_entry.php" method="post">
                            <div class="form-group text-center">
                                 <label class="col-sm-3 control-label">AG ID No. </label>
                                <div class="col-sm-9"> <input type="text" class="form-control heigh " placeholder="Person ID" name="person_id" value="<?php echo $person_id ?>" readonly>
                             </div>
                            </div>
                            <div class="form-group"><label class="col-sm-3 control-label">AG Commander</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="AG Commander" name="AG_commander"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 02</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 02" name="Person_02"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 03</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 03" name="Person_03"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 04</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 04" name="Person_04"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 05</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 05" name="Person_05"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 06</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 06" name="Person_06"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 07</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 07" name="Person_07"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 08</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 08" name="Person_08"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 09</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 09" name="Person_09"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 10</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 10" name="Person_10"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 11</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 11" name="Person_11"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 12</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 12" name="Person_12"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 13</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 13" name="Person_13"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 14</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 14" name="Person_14"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 15</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 15" name="Person_15"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 16</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 16" name="Person_16"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 17</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 17" name="Person_17"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 18</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 18" name="Person_18"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 19</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 19" name="Person_19"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 20</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 20" name="Person_20"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 21</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 21" name="Person_21"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 22</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 22" name="Person_22"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 23</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 23" name="Person_23"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 24</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 24" name="Person_24"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 25</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 25" name="Person_25"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 26</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 26" name="Person_26"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 27</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 27" name="Person_27"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 28</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 28" name="Person_28"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 29</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 29" name="Person_29"></div></div>
                            <div class="form-group"><label class="col-sm-3 control-label">Person 30</label><div class="col-sm-9"><input type="text" class="form-control heigh autocom" placeholder="Person 30" name="Person_30"></div></div>

                            <div id="sandbox-container">
                                <div class="form-group"><label class="col-sm-3 control-label">Last Update Date </label><div class="col-sm-9"><input type="text" class="form-control heigh" placeholder="Last Posting Date" name="last_posted_date" ></div></div>
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
