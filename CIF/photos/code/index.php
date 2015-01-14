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
?>
<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <label class="col-sm-3 control-label">Person Id</label><div class="col-sm-9"> <input type="text" class="form-control heigh " placeholder="Person ID" name="person_id" value="<?php echo $person_id; ?>" ></div></div>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>