<?php
require 'core/database/database.php';
$id = null;
if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if (null == $id) {
    header("Location: login.php");
} else {
    $pdo = Database::connect();

    $sql = "SELECT * FROM OPERATIONS where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);

    Database::disconnect();
}
?>
<?php
include 'core/init.php';
include 'includes/overall/header.php';
;

?>

<body>
<?php
include 'includes/overall/top_nav.php';
?>
    <style type="text/css">
        .pic {
            padding: 50px;
            margin-bottom: 5px;
            padding-left: 20px;

        }
    .table{
        width: auto;
        margin: 100px auto;
    }

    </style>



    <div class="pic">
        <div>
            <strong>
                <h3>
                    Operation Details for Operation No <?php echo $data['id']; ?>
                </h3>
            </strong>
        </div>
        <div  class="col-md-12">
            <div class="container ">
                <div class="table-responsive">
                    <table id="resizeing" class="table table-striped table-bordered table-hover">
                        <tr>
                        <th class="col-sm-3"><H4><STRONG>Particulars </STRONG></H4></th>
                        <th class="col-sm-9"><H4><STRONG>Details</STRONG></H4></th>
                        </tr>

                        <tr>
                            <td ><strong>Operation Number</strong></td>
                            <td ><?php echo $data['id']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Operation Name</strong></td>
                            <td><?php echo $data['OPS_NAME']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>District</strong></td>
                            <td><?php echo $data['DISTRICT']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>PS</strong></td>
                            <td><?php echo $data['PS']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Area of Operation</strong></td>
                            <td><?php echo $data['AREA_OF_OPERATION']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Operation Date</strong></td>
                            <td><?php echo $data['OPS_DATE']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Duration</strong></td>
                            <td><?php echo $data['DURATION']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Assault Group No</strong></td>
                            <td><?php echo $data['AG-NO']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Remarks</strong></td>
                            <td><?php echo $data['REMARKS']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Other Forces</strong></td>
                            <td><?php echo $data['OTHER FORCES']; ?></td>
                        </tr>
                    </table>
                    <?php
                    echo "Favorite color is " . $_SESSION['user'] . ".<br>";
                    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
                    ?>
                    <button class="btn btn-default hidden-print" onclick="window.print();"><i
                            class="fa fa-print fa-2x"></i>
                        Print
                    </button>
                    <button class="btn btn-primary" id="dialog">Run the code</button>

                </div>
            </div>
        </div>
    </div> <!-- /container -->
<?php include 'includes/overall/footer.php'; ?>