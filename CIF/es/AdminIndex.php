<?php  include('configPDO.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>DEMO-PHP Simple Insert-Update-Delete-Select via PDO Queries.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">

  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">


    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="http://crewow.com/" target="_blank">CREWOW.COM</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="./index.php">Welcome</a>
              </li>  
            </ul>
          </div>
        </div>
      </div>
    </div>


<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h2>Welcome to <img src="assets/img/SMALL.png"></h2>
  </div>
</header>


 <div class="container">

    <!-- Docs nav
    ================================================== -->
  
   <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#Options"><i class="icon-chevron-right"></i> Options</a></li>
          <li><a href="#c1"><i class="icon-chevron-right"></i> Fruit Rates Averages</a></li>
          <li><a href="#c2"><i class="icon-chevron-right"></i> Fruit Rates Records</a></li>      
        </ul>
      </div>
      
      
      <div class="span9">

        <!-- Options
        ================================================== -->
        <section id="Options">
          <div class="page-header">
            <h1>Options</h1>
          </div>
          <div class="btn-group" style="margin: 9px 0 5px;">
          	<a  href="#addin" data-toggle="modal" class="btn btn-info">Insert</a>
            <a  href="#updateit" data-toggle="modal" class="btn btn-warning">Update</a>
            <a  href="#deleteit" data-toggle="modal" class="btn btn-danger">Delete</a>
            <a  href="#selectit" data-toggle="modal" class="btn btn-primary">Select</a>
            <a  href="#exporttoexcel" data-toggle="modal" class="btn btn-success">Export</a>
              
            </div>
            
 
            
        </section>

        <!-- Fruit Rates Averages
        ================================================== -->
        <section id="c1">
          <div class="page-header">
            <h1>Fruit Rates Averages</h1>
          </div>
          
<table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Fruit Name</th>
                  <th>Average Rate</th>
                </tr>
              </thead>
              <tbody>


            
            <?php
			    if($_GET["FruitstatsAdded"]==77083368)  
			   {
			   echo "<div class='alert alert-success'>"; 
			   echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>"; 
			   echo "Fruit Rate added in this Demo System."; 
			   echo "</div>";
			   }
			   if($_GET["FruitstatsUpdated"]==77083368)  
			   {
			   echo "<div class='alert alert-success'>"; 
			   echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
			   echo "<h4>Updated</h4>"; 
			   echo "Fruit Name updated in this Demo System."; 
			   echo "</div>"; 
			   } 
			   if($_GET["Fruitstatsdeleted"]==77083368)  
			   {
			   echo "<div class='alert alert-error'>"; 
			   echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
			   echo "<h4>Updated</h4>"; 
			   echo "Fruit Name and all it rates deleted from this Demo System."; 
			   echo "</div>"; 
			   } 
			   
			

// We Will prepare SQL Query
    $STM = $dbh->prepare("SELECT  `Fruitname`, FORMAT(AVG(`Rate`),2) FROM fruitsratelist GROUP BY Fruitname");
// For Executing prepared statement we will use below function
    $STM->execute();
// we will fetch records like this and use foreach loop to show multiple Results
    $STMrecords = $STM->fetchAll();
    foreach($STMrecords as $row)
        {
			
		 echo"<tr>";
		 
		echo"<td><img src='assets/img/$row[0].png'>".$row[0]."</td>";
		if($row[1]>=80)	
		{echo "<td><span class='label label-important'>".$row[1]."</span></td>"; } 
		else if($row[1]>=50 && $row[1]<=79) 
		{ echo "<td><span class='label label-warning'>".$row[1]."</span></td>"; }
		else 
		{ echo "<td><span class='label label-success'>".$row[1]."</span></td>"; }

        echo"</tr>";

		
        }
		

			
			?>

              </tbody>
            </table>
          
          
        </section>
        
                <!-- Fruit Rates Records
        ================================================== -->
        <section id="c2">
          <div class="page-header">
            <h1>Fruit Rates Records</h1>
          </div>
          
<table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Fruit Name</th>
                  <th>Rate</th>
                </tr>
              </thead>
              <tbody>


            
            <?php


// We Will prepare SQL Query
    $STM = $dbh->prepare("SELECT  `Fruitname`, FORMAT(`Rate`,2) FROM fruitsratelist ORDER BY Fruitname");
// For Executing prepared statement we will use below function
    $STM->execute();
// we will fetch records like this and use foreach loop to show multiple Results
    $STMrecords = $STM->fetchAll();
    foreach($STMrecords as $row)
        {
			
		 echo"<tr>";
		 
		echo"<td><img src='assets/img/$row[0].png'>".$row[0]."</td>";
		if($row[1]>=80)	
		{echo "<td><span class='label label-important'>".$row[1]."</span></td>"; } 
		else if($row[1]>=50 && $row[1]<=79) 
		{ echo "<td><span class='label label-warning'>".$row[1]."</span></td>"; }
		else 
		{ echo "<td><span class='label label-success'>".$row[1]."</span></td>"; }

        echo"</tr>";

		
        }
		

			
			?>

              </tbody>
            </table>
         
        </section>



    






      </div>
    </div>

  </div>



    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <?php  include('footer.php'); ?>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>

	<script src="assets/js/jqBootstrapValidation.js"></script>     
             <script>
  $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
</script>




  </body>
</html>
