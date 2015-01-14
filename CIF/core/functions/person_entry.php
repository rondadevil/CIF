<?php
require 'core/database/database.php';
session_start();
$user = $_POST['username'];
$password = $_POST['password'];

$person_id = $_POST["person_id"];
$person_name = $_POST["person_name"];
$person_rank = $_POST["person_rank"];
$father_name = $_POST["father_name"];
$address = $_POST["address"];
$contact_number = $_POST["contact_number"];
$nearest_RS = $_POST["nearest_RS"];
$DOB = $_POST["DOB"];
$DOA = $_POST["DOA"];
$date_of_joining_in_CIF = $_POST["date_of_joining_in_CIF"];
$educational_qualification = $_POST["educational_qualification"];
$marritial_Status = $_POST["marritial_Status"];
$next_of_kin = $_POST["next_of_kin"];
$previous_posting = $_POST["previous_posting"];
$previous_training_completed = $_POST["previous_training_completed"];
$emergency_name = $_POST["emergency_name"];
$emergency_number = $_POST["emergency_number"];
$emergency_Relationship = $_POST["emergency_Relationship"];
$photo = $_POST["photo"];
$presently_posted_at = $_POST["presently_posted_at"];
$last_posting_at = $_POST["last_posting_at"];
$last_posted_date = $_POST["last_posted_date"];
$remarks = $_POST["remarks"];

$sql = "INSERT INTO person_details (person_id, person_name, person_rank, father_name, address, contact_number, nearest_RS,
DOB, DOA, date_of_joining_in_CIF, educational_qualification, marritial_Status, next_of_kin, previous_posting, previous_training_completed,
emergency_name, emergency_number, emergency_Relationship, photo, presently_posted_at, last_posting_at, last_posted_date, remarks)
VALUES (:person_id,
:person_name,
:person_rank,
:father_name,
:address,
:contact_number,
:nearest_RS,
:DOB,
:DOA,
:date_of_joining_in_CIF,
:educational_qualification,
:marritial_Status,
:next_of_kin,
:previous_posting,
:previous_training_completed,
:emergency_name,
:emergency_number,
:emergency_Relationship,
:photo,
:presently_posted_at,
:last_posting_at,
:last_posted_date,
:remarks)";
$pdo = Database::connect();


$result = $pdo->prepare($sql);
$result->bindParam(':person_id', $person_id);
$result->bindParam(':person_name', $person_name);
$result->bindParam(':person_rank', $person_rank);
$result->bindParam(':father_name', $father_name);
$result->bindParam(':address', $address);
$result->bindParam(':contact_number', $contact_number);
$result->bindParam(':nearest_RS', $nearest_RS);
$result->bindParam(':DOB', $DOB);
$result->bindParam(':DOA', $DOA);
$result->bindParam(':date_of_joining_in_CIF', $date_of_joining_in_CIF);
$result->bindParam(':educational_qualification', $educational_qualification);
$result->bindParam(':marritial_Status', $marritial_Status);
$result->bindParam(':next_of_kin', $next_of_kin);
$result->bindParam(':previous_posting', $previous_posting);
$result->bindParam(':previous_training_completed', $previous_training_completed);
$result->bindParam(':emergency_name', $emergency_name);
$result->bindParam(':emergency_number', $emergency_number);
$result->bindParam(':emergency_Relationship', $emergency_Relationship);
$result->bindParam(':photo', $photo);
$result->bindParam(':presently_posted_at', $presently_posted_at);
$result->bindParam(':last_posting_at', $last_posting_at);
$result->bindParam(':last_posted_date', $last_posted_date);
$result->bindParam(':remarks', $remarks);
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if ($rows > 0) {
    echo "Yahooo!!!"

    header("location: dashboard.php");
} else {
    $errmsg_arr[] = 'Username and Password are not found';
    $errflag = true;
}
?>