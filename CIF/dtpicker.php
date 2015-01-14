<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Datepicker for Bootstrap</title>
    <script src="includes/overall/js/jquery.min.js"></script>
    <link id="bs-css" href="includes/overall/css/bootstrap.css" rel="stylesheet">
    <?php include 'includes/overall/dtcss.php';?>

    <style>
        body {
            padding-top: 50px;
        }
    </style>


</head>

<body>

<form name="login" class="form-signin" action="hello.php" method="post">

    <div class="span5 col-md-3" id="sandbox-container">
            <input id="sandbox-container" type="text" class="form-control" name="username"></div>
        <div class="span7 col-md-9">
        <button class="btn btn-lg btn-primary btn-block" type="submit">
            Sign in
        </button>
    </div>
    </div>
</form>



<?php include 'includes/overall/dtpjs.php';?>