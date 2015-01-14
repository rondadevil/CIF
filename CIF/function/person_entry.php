<?php
require '../core/database/database.php';
 ?>


<?php echo $_POST["person_id"]; ?>
<?php echo $_POST["person_name"]; ?>
<?php echo $_POST["person_rank"]; ?>
<?php echo $_POST["father_name"]; ?>
<?php echo $_POST["address"]; ?>
<?php echo $_POST["contact_number"]; ?>
<?php echo $_POST["nearest_RS"]; ?>
<?php echo $_POST["DOB"]; ?>
<?php echo $_POST["DOA"]; ?>
<?php echo $_POST["date_of_joining_in_CIF"]; ?>
<?php echo $_POST["educational_qualification"]; ?>
<?php echo $_POST["blood_group"]; ?>
<?php echo $_POST["marritial_Status"]; ?>
<?php echo $_POST["next_of_kin"]; ?>
<?php echo $_POST["previous_posting"]; ?>
<?php echo $_POST["previous_training_completed"]; ?>
<?php echo $_POST["emergency_name"]; ?>
<?php echo $_POST["emergency_number"]; ?>
<?php echo $_POST["emergency_Relationship"]; ?>

<?php echo $_POST["presently_posted_at"]; ?>
<?php echo $_POST["last_posting_at"]; ?>
<?php echo $_POST["last_posted_date"]; ?>
<?php echo $_POST["remarks"];
echo $_POST["RadioOptions"];




$person_id = $_POST["person_id"];
$person_name = $_POST["person_name"];
$person_rank = $_POST["person_rank"];
$rank_name = $_POST["rank_name"];
$father_name = $_POST["father_name"];
$address = $_POST["address"];
$contact_number = $_POST["contact_number"];
$nearest_RS = $_POST["nearest_RS"];
$DOB = $_POST["DOB"];
$DOA = $_POST["DOA"];
$date_of_joining_in_CIF = $_POST["date_of_joining_in_CIF"];
$educational_qualification = $_POST["educational_qualification"];
$blood_group = $_POST["blood_group"];
$marritial_Status = $_POST["marritial_Status"];
$next_of_kin = $_POST["next_of_kin"];
$previous_posting = $_POST["previous_posting"];
$previous_training_completed = $_POST["previous_training_completed"];
$emergency_name = $_POST["emergency_name"];
$emergency_number = $_POST["emergency_number"];
$emergency_Relationship = $_POST["emergency_Relationship"];
$presently_posted_at = $_POST["presently_posted_at"];
$last_posting_at = $_POST["last_posting_at"];
$last_posted_date = $_POST["last_posted_date"];
$remarks = $_POST["remarks"];
$status = $_POST["RadioOptions"];

$sql = "INSERT INTO person_details (person_id, person_name, person_rank, rank_name, father_name, address, contact_number, nearest_RS,
DOB, DOA, date_of_joining_in_CIF, educational_qualification, blood_group, marritial_Status, next_of_kin, previous_posting, previous_training_completed,
emergency_name, emergency_number, emergency_Relationship, photo, presently_posted_at, last_posting_at, last_posted_date, remarks, status)
VALUES (:person_id,
:person_name,
:person_rank,
:rank_name,
:father_name,
:address,
:contact_number,
:nearest_RS,
:DOB,
:DOA,
:date_of_joining_in_CIF,
:educational_qualification,
:blood_group,
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
:remarks,
:status)";
$pdo = Database::connect();


$result = $pdo->prepare($sql);
$result->bindParam(':person_id', $person_id);
$result->bindParam(':person_name', $person_name);
$result->bindParam(':person_rank', $person_rank);
$result->bindParam(':rank_name', $rank_name);
$result->bindParam(':father_name', $father_name);
$result->bindParam(':address', $address);
$result->bindParam(':contact_number', $contact_number);
$result->bindParam(':nearest_RS', $nearest_RS);
$result->bindParam(':DOB', $DOB);
$result->bindParam(':DOA', $DOA);
$result->bindParam(':date_of_joining_in_CIF', $date_of_joining_in_CIF);
$result->bindParam(':educational_qualification', $educational_qualification);
$result->bindParam(':blood_group', $blood_group);
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
$result->bindParam(':status', $status);
$result->execute();


header( "location:../create_people.php?personAdded=77083368");



?>