<?php
function logged_in(){
    return (isset($_SESSION['user'])) ? true : false;
}

function logout(){
    session_start();
    session_destroy();

    header("Location: login.php");
}
?>