<?php
include 'core/init.php';
include 'includes/overall/header.php';
include 'core/database/database.php'; ?>
<link href="includes/overall/signin.css" rel="stylesheet">
<body>
<?php


?>
<img src="image.jpeg" class="bg">
<div id="page-wrap">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">

                <div class="account-wall">

                    <form name="login" class="form-signin" action="welcome.php" method="post">
                        <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign in</button>
                        <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">
                            Remember me
                        </label>

                    </form>
                </div>
                <a href="#" class="text-center new-account">Create an account </a>
            </div>
        </div>
    </div>
</div>


<style type="text/css" style="display: none !important;">
    * {
    margin: 0;
    padding: 0;
    }
    body {
    overflow-x: hidden;
    }

</style>
<?php include 'includes/overall/footer.php'; ?>

