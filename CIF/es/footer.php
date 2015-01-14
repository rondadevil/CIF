        <p>Designed By Furqan Aziz From <a href="http://crewow.com/" title="Crewow" target="_blank">Crewow</a></p>

          
          
<!-- Add new Fruit Details  modal content -->
          <div id="addin" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Add Fruit Name and Rate</h3>
            </div>
            <div class="modal-body">
<form class="form-horizontal" method="post" action="FruitMy.php">

                        <div class="control-group">
              <label class="control-label" for="Fruitname">Fruit Name</label>
              <div class="controls">
              <select name="Fruitname" id="Fruitname"  required="required">
              <option value="">Fruit Name</option>
              <option value="Banana">Banana</option>
              <option value="Pear">Pear</option>
              <option value="Orange">Orange</option>
              <option value="Kiwi">Kiwi</option>
              <option value="Mango">Mango</option>       
              <option value="Lemon">Lemon</option>
              <option value="Peach">Peach</option>
              <option value="Cherry">Cherry</option>
              <option value="Strawberry">Strawberry</option>
              <option value="Apricot">Apricot</option>
              <option value="Apple">Apple</option>
            </select>
              
              </div>
            </div>
                        <div class="control-group">
              <label class="control-label" for="Fruit Rate">Fruit Rate</label>
              <div class="controls">
                <input type="text" name="a1"  id="a1" pattern="^\d{0,2}(\.\d{0,2}){0,1}$" data-validation-pattern-message="Must be a Double Number'"   placeholder="Fruit Rate" required="required">
              </div>
            </div>
           

            <div class="control-group">
              <div class="controls">
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Add Rate">
              </div>
            </div>
          </form>

            </div>
          </div> 
          
          
<!-- Update Fruit Details  modal content -->
          <div id="updateit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Update Fruit Name</h3>
            </div>
            <div class="modal-body">
<form class="form-horizontal" method="post" action="FruitUMy.php">

                        <div class="control-group">
              <label class="control-label" for="Fruitname1">Fruit Name</label>
              <div class="controls">
              <select name="Fruitname1" id="Fruitname1"  required="required">
              <option value="">Current Fruit Name</option>
			<?php
		include("configPDO.php");
      // We Will prepare SQL Query
    $STM = $dbh->prepare("SELECT DISTINCT  Fruitname FROM fruitsratelist");
// bind paramenters, Named paramenters alaways start with colon(:)
    $STM->execute();
// we will fetch records like this and use foreach loop to show multiple Results
    $STMrecords = $STM->fetchAll();
    foreach($STMrecords as $row)
        {
		   echo"<option value='$row[0]'>$row[0]</option>";	
		}        
		?> 
            </select>
            
              </div>
            </div>
            
            
                        <div class="control-group">
              <label class="control-label" for="Fruitname2">Fruit Name</label>
              <div class="controls">
              <select name="Fruitname2" id="Fruitname2"  required="required">
              <option value="">New Fruit Name</option>
              <option value="Banana">Banana</option>
              <option value="Pear">Pear</option>
              <option value="Orange">Orange</option>
              <option value="Kiwi">Kiwi</option>
              <option value="Mango">Mango</option>       
              <option value="Lemon">Lemon</option>
              <option value="Peach">Peach</option>
              <option value="Cherry">Cherry</option>
              <option value="Strawberry">Strawberry</option>
              <option value="Apricot">Apricot</option>
              <option value="Apple">Apple</option>
            </select>
            
              </div>
            </div>
           

            <div class="control-group">
              <div class="controls">
                <input type="submit" name="submit" id="submit" class="btn btn-warning" value="Change Fruit Name">
              </div>
            </div>
          </form>

            </div>
          </div>   
  
 
 
 
<!-- deleteit Fruit Details  modal content -->
          <div id="deleteit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Delete Fruit Name and Rates</h3>
            </div>
            <div class="modal-body">
<form class="form-horizontal" method="post" action="FruitDMy.php">

                        <div class="control-group">
              <label class="control-label" for="Fruitname1">Fruit Name</label>
              <div class="controls">
              <select name="Fruitname1" id="Fruitname1"  required="required">
              <option value="">Fruit Name</option>
			<?php
		include("configPDO.php");
      // We Will prepare SQL Query
    $STM = $dbh->prepare("SELECT DISTINCT  Fruitname FROM fruitsratelist");
// bind paramenters, Named paramenters alaways start with colon(:)
    $STM->execute();
// we will fetch records like this and use foreach loop to show multiple Results
    $STMrecords = $STM->fetchAll();
    foreach($STMrecords as $row)
        {
		   echo"<option value='$row[0]'>$row[0]</option>";	
		}        
		?> 
            </select>
            
              </div>
            </div>
                    

            <div class="control-group">
              <div class="controls">
                <input type="submit" name="submit" id="submit" class="btn btn-danger" value="Delete Fruit Records">
              </div>
            </div>
          </form>

            </div>
          </div>  
          
<!-- selectit Fruit Details  modal content -->
          <div id="selectit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Choose Fruit Name</h3>
            </div>
            <div class="modal-body">
<form class="form-horizontal" method="post" action="SearchFruit.php">

                        <div class="control-group">
              <label class="control-label" for="Fruitname1">Fruit Name</label>
              <div class="controls">
              <select name="Fruitname1" id="Fruitname1"  required="required">
              <option value="">Fruit Name</option>
			<?php
		include("configPDO.php");
      // We Will prepare SQL Query
    $STM = $dbh->prepare("SELECT DISTINCT  Fruitname FROM fruitsratelist");
// bind paramenters, Named paramenters alaways start with colon(:)
    $STM->execute();
// we will fetch records like this and use foreach loop to show multiple Results
    $STMrecords = $STM->fetchAll();
    foreach($STMrecords as $row)
        {
		   echo"<option value='$row[0]'>$row[0]</option>";	
		}        
		?> 
            </select>
            
              </div>
            </div>
                    

            <div class="control-group">
              <div class="controls">
                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Search Selected">
              </div>
            </div>
          </form>

            </div>
          </div>  
          
          
 <!-- Export To Excel options -->
          <div id="exporttoexcel" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Export to Excel Option</h3>
            </div>
            <div class="modal-body">

			<div class="btn-group" style="margin: 9px 0 5px;">
            <a  href="Export-To-Excel.php" class="btn btn-success">Overall Records</a>
              
            </div>

            </div>
          </div> 