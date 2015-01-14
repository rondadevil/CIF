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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
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
      <div class="span12">



        <!-- Search Results
        ================================================== -->
        <section id="Searc-Results">
          <div class="page-header">
          </div>
 
<?php

if($_POST[Fruitname1]=='')

{

echo"<div class='alert alert-error'>";
echo"<button type='button' class='close' data-dismiss='alert'>&times;</button>";
echo"<p>Please Choose Fruit Name from dropdown</p>";
echo"</div>";

}

else
{
	
echo"<div class='alert alert-info'>";
echo"<button type='button' class='close' data-dismiss='alert'>&times;</button>";
echo"<p>You search for <img src='assets/img/$_POST[Fruitname1].png'></p>";
echo"</div>";

}

?>
 
          
<table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Fruit Name</th>
                  <th>Average Rate</th>
                </tr>
              </thead>
              <tbody>


            
            <?php
			// Define Variable
	$searchg = '%' . $_POST['Fruitname1'] . '%';
// We Will prepare SQL Query
    $STM = $dbh->prepare("SELECT  `Fruitname`, FORMAT(AVG(`Rate`),2) FROM fruitsratelist  WHERE Fruitname LIKE :searchg");
// bind paramenters, Named paramenters alaways start with colon(:)                      
    $STM->bindParam(':searchg', $searchg);
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
