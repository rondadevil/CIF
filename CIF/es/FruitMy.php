<?php
// We will include connection file first
include('configPDO.php');
// check if varaibable is set and Add Rate Button pressed.
if(isset($_POST["submit"])=="Add Rate")
{
// Define Variables
$Fruitname			= 	$_POST[Fruitname];   		//Fruitname
$a1					= 	$_POST[a1];   					//Rate

// We Will prepare SQL Query
    $STM = $dbh->prepare("INSERT INTO fruitsratelist(Fruitname, Rate) VALUES (:Fruitname,:a1)");
// bind paramenters, Named parameters always start with colon(:)
    $STM->bindParam(':Fruitname', $Fruitname);
	$STM->bindParam(':a1', $a1);
// For Executing prepared statement we will use below function
    $STM->execute();
// We use header here for redirecting it to other page where we will show success message.						
header( "location:AdminIndex.php?FruitstatsAdded=77083368");       			   
}
?> 