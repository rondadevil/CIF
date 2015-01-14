<?php
include 'core/init.php';
include 'includes/overall/header.php';
include 'includes/overall/sideNav.php'; ?>

<body>
<?php
include 'includes/overall/top_nav.php';


include 'includes/overall/dtcss.php';?>
<div class="span5 col-md-3" id="sandbox-container">
<form name="login" class="form-signin" action="welcome.php" method="post">
    <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
    <input type="password" class="form-control" placeholder="Password" name="password" required>
    <input id="sandbox-container" type="text" class="form-control" name="username">
    <textarea class="input-xlarge trololo" id="textarea" rows="4" cols="78" placeholder="Address" required ></textarea>
    <button class="btn btn-lg btn-primary btn-block" type="submit">
        Sign in</button>

    <input id="sandbox-container" type="text" class="form-control" name="username">
</form>
</div>
<?php include 'includes/overall/footer.php';
include 'includes/overall/dtpjs.php';?>