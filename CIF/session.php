<?php

if(!isset($_SESSION)) session_start();


function session_cnt()
{
    $pdo1 = Database::connect();
    $result1 = $pdo1->query("SELECT * from person_details");
    $rows1= $result1->rowCount();
    Database::disconnect();
    $session_id = rows1+1;
    return $session_id;
}
?>