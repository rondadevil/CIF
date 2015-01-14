<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 30/12/14
 * Time: 9:25 AM
 */
    $person_id = null;
    if (!empty($_GET['person_id'])) {
        $person_id = $_REQUEST['person_id'];
    }

    if (null == $person_id) {
        header("Location: total_people.php");
    } else {
        echo $person_id;
    }