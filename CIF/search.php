<?php
require 'core/database/database.php';

$pdo = Database::connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM person_details WHERE person_rank LIKE (:keyword)";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
    // put in bold the written text

    $person = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['person_name']);
    // add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['person_name']).'\')">'.$person.'</li>';
}
?>