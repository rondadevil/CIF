<?php
include 'core/init.php';
include 'includes/overall/header.php';
 ?>

<body>
<?php
include 'includes/overall/top_nav.php'

;


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
                <h1>CIF Operations Till Date : <?php echo date("d.m.y") ?></h1>
                <?php include 'total_ops.php'; ?>

            </div>

        </div>
    </div>

<?php include 'includes/overall/footer.php'; ?>