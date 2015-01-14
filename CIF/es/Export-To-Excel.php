<?php
include("configPDO.php");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=Export.xls");
//header("Content-type: application/vnd.ms-word");
//header("Content-Disposition: attachment;Filename=document_name.doc");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";

echo "<table border=1>";
echo "<th colspan='2' style='background-color:#666666; color:#FFFFFF;'>Export Fruit Details</th>";
      		
echo"<tr><th>Fruit Name</th><th>Rate</th></tr>";


// We Will prepare SQL Query
    $STM = $dbh->prepare("SELECT  `Fruitname`,FORMAT(`Rate`,2) FROM fruitsratelist ORDER BY Fruitname");
// For Executing prepared statement we will use below function
    $STM->execute();
// we will fetch records like this and use foreach loop to show multiple Results
    $STMrecords = $STM->fetchAll();
    foreach($STMrecords as $row)
        {
			

		 echo"<tr>";
		 
		echo"<td>".$row[0]."</td>";
		if($row[1]>=80)	
		{echo "<td><span class='label label-important'>".$row[1]."</span></td>"; } 
		else if($row[1]>=50 && $row[1]<=79) 
		{ echo "<td><span class='label label-warning'>".$row[1]."</span></td>"; }
		else 
		{ echo "<td><span class='label label-success'>".$row[1]."</span></td>"; }

        echo"</tr>";

		
        }
	

			




echo "</table>";
echo "</body>";
echo "</html>";
?>