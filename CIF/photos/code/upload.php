<?php
    require '../../core/database/database.php';
     echo $_POST["person_id"];
    $person_id = $_POST["person_id"];
$sql = "UPDATE person_details SET photo = ?where person_id = ? ";

    $target = "../../uploads/person/";
    $target = $target . basename( $_FILES['fileToUpload']['name']);
    $pdo = Database::connect();
    $q = $pdo->prepare($sql);
$q->execute(array($target,$person_id));
    Database::disconnect();

// if everything is ok, try to upload file

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

        ?>
        <br>

        <img src="<?php echo $target?>" height=300 width=200>
        <?php  echo '<a href="../../update_people.php?person_id=' . $person_id . '">Back to Update Page</a>'; ?>


        <?php
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

?>