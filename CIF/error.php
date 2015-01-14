<H1>OPS SORRY YOU HAVE INCORRECT CREDENTIALS </H1>

<?php


if(isset($_SESSION)) {
    session_start();
    session_write_close();
    session_destroy();
}

 ?>
Redirecting you to Login Page in 05 Seconds.
<script type="text/javascript">
    setTimeout("window.location = 'login.php'", 5000);
</script>