<?php
include('configPDO.php');
if(isset($_POST["submit"])=="Delete Fruit Records")

{

// Define Variable
$Fruitname1				= 	$_POST[Fruitname1];   		//Fruitname1

// We Will prepare SQL Query
	$STM = $dbh->prepare("DELETE FROM fruitsratelist  WHERE Fruitname=:Fruitname1");
// bind paramenters, Named paramenters alaways start with colon(:)
    $STM->bindParam(':Fruitname1', $Fruitname1);
// For Executing prepared statement we will use below function
    $STM->execute();						
header( "location:AdminIndex.php?Fruitstatsdeleted=77083368");       			   
}
?> 