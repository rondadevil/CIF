<?php
include('configPDO.php');
if(isset($_POST["submit"])=="Change Fruit Name")

{

// Define Variable
$Fruitname1				= 	$_POST[Fruitname1];   		//Fruitname1
$Fruitname2				= 	$_POST[Fruitname2];   		//Fruitname2

// We Will prepare SQL Query
	$STM = $dbh->prepare("UPDATE fruitsratelist SET Fruitname=:Fruitname2 WHERE Fruitname=:Fruitname1");
// bind paramenters, Named paramenters alaways start with colon(:)
    $STM->bindParam(':Fruitname1', $Fruitname1);
	$STM->bindParam(':Fruitname2', $Fruitname2);
// For Executing prepared statement we will use below function
    $STM->execute();						
header( "location:AdminIndex.php?FruitstatsUpdated=77083368");       			   
}
?> 