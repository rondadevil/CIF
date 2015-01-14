<?php
include '../../core/database/database.php';

if (isset($_GET['term'])){
	$return_arr = array();

	try {
        $pdo = Database::connect();

        $stmt = $pdo->prepare('SELECT rank_name FROM person_details WHERE rank_name LIKE :term');
        $stmt->execute(array('term' => '%'.$_GET['term'].'%'));

        while($row = $stmt->fetch()) {
            $return_arr[] =  $row['rank_name'];

        }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
    Database::disconnect();

    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}


?>