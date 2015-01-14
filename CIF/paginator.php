<style>
    body{
        font: normal normal 98% Arial, Serif;
    }

    .customBtn {
        cursor:pointer;
        margin:0 .3em 0 0;
        -moz-box-shadow:inset 0px 1px 0px 0px #caefab;
        -webkit-box-shadow:inset 0px 1px 0px 0px #caefab;
        box-shadow:inset 0px 1px 0px 0px #caefab;
        background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #77d42a), color-stop(1, #5cb811) );
        background:-moz-linear-gradient( center top, #77d42a 5%, #5cb811 100% );
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77d42a', endColorstr='#5cb811');
        background-color:#77d42a;
        -moz-border-radius:6px;
        -webkit-border-radius:6px;
        border-radius:6px;
        border:1px solid #268a16;
        display:inline-block;
        color:#ffffff;
        font-family:arial;
        font-size:.8em;
        font-weight:bold;
        padding:6px 10px;
        text-decoration:none;
        /*text-shadow:1px 1px 0px #f1f1f1;*/
    }

    .customBtn:hover {
        background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #5cb811), color-stop(1, #77d42a) );
        background:-moz-linear-gradient( center top, #5cb811 5%, #77d42a 100% );
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cb811', endColorstr='#77d42a');
        background-color:#5cb811;
    }

    .customBtn:active {
        position:relative;
        top:1px;
    }

    input[type=text],
    input[type=password]{
        padding:.3em;
    }

    table.tftable {font-size:12px;color:#333333;width:50%;border-width: 1px;border-color: #a9a9a9;border-collapse: collapse;}
    table.tftable th {font-size:12px;background-color:#b8b8b8;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;text-align:left;}
    table.tftable tr {background-color:#ffffff;}
    table.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #a9a9a9;}

    .userId{
        display:none;
    }

    #viewUsers,
    #addUser{
        float:left;
    }

    #loaderImage{
        float:left;
        line-height:32px;
    }
    html{
        font-size: 16px;
    }
    #paging{
        margin:1em 0;
    }

</style>


<?php
/******** Important ***********
Just change the table name in
 * SELECT COUNT(*) as total_rows FROM tableName and all ok";
 */

    // *************** <PAGING_SECTION> ***************
    echo "<div id='paging'>";

    // ***** for 'first' and 'previous' pages
    if($page>1){
        // ********** show the first page
        echo "<a href='" . $_SERVER['PHP_SELF'] . "' title='Go to the first page.' class='customBtn'>";
        echo "<span style='margin:0 .5em;'> << </span>";
        echo "</a>";

        // ********** show the previous page
        $prev_page = $page - 1;
        echo "<a href='" . $_SERVER['PHP_SELF'] . "?page={$prev_page}' title='Previous page is {$prev_page}.' class='customBtn'>";
        echo "<span style='margin:0 .5em;'> < </span>";
        echo "</a>";

    }


    // ********** show the number paging

    // find out total pages
$pdo = Database::connect();

    $query = "SELECT COUNT(*) as total_rows FROM operations";
    $stmt = $pdo->prepare( $query );
    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $total_rows = $row['total_rows'];
Database::disconnect();
    $total_pages = ceil($total_rows / $recordsPerPage);

    // range of num links to show
    $range = 5;

    // display links to 'range of pages' around 'current page'
    $initial_num = $page - $range;
    $condition_limit_num = ($page + $range)  + 1;

    for ($x=$initial_num; $x<$condition_limit_num; $x++) {

        // be sure '$x is greater than 0' AND 'less than or equal to the $total_pages'
        if (($x > 0) && ($x <= $total_pages)) {

            // current page
            if ($x == $page) {
                echo "<span class='customBtn' style='background:red;'>$x</span>";
            }

            // not current page
            else {
                echo " <a href='{$_SERVER['PHP_SELF']}?page=$x' class='customBtn'>$x</a> ";
            }
        }
    }


    // ***** for 'next' and 'last' pages
    if($page<$total_pages){
        // ********** show the next page
        $next_page = $page + 1;
        echo "<a href='" . $_SERVER['PHP_SELF'] . "?page={$next_page}' title='Next page is {$next_page}.' class='customBtn'>";
        echo "<span style='margin:0 .5em;'> > </span>";
        echo "</a>";

        // ********** show the last page
        echo "<a href='" . $_SERVER['PHP_SELF'] . "?page={$total_pages}' title='Last page is {$total_pages}.' class='customBtn'>";
        echo "<span style='margin:0 .5em;'> >> </span>";
        echo "</a>";


    echo "</div>";

    // ***** allow user to enter page number
    echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='GET'>";
    echo "Go to page: ";
    echo "<input type='text' name='page' size='1' />";
    echo "<input type='submit' value='Go' class='customBtn' />";
    echo "</form>";
    }
    // *************** </PAGING_SECTION> ***************


// tell the user if no records were found
else{
    echo "<div class='noneFound'>No records found.</div>";
}
?>
