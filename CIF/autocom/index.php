<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Demo</title>
  <link rel="stylesheet" href="jquery-ui.min.css" type="text/css" /> 
  <link rel="stylesheet" href="jquery-ui.min.css" type="text/css" />
</head>
<body> 
<style type="text/css">
	
	.tt-query,
.tt-hint {
    width: 396px;
    height: 50px;
    padding: 8px 12px;
    font-size: 18px;
    line-height: auto;
    border: 2px solid #ccc;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    outline: none;
}
.ui-menu {
  display: block;
  list-style: outside none none;
  margin: 0;
  outline: medium none;
  padding: 2px 30px;
}

.ui-autocomplete, .ui-front, .ui-menu, .ui-widget, .ui-widget-content{
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    margin-top: 12px;
    padding: 8px 0;
    width: 396px;
}
li>.ui-corner-all{
	background-color:none;
    border: none;
    border-radius: none
    box-shadow:none;
    margin-top: 12px;
    padding: none;
    width:none;
	}
	li>a.ui-corner-all{
	background-color:none;
    border: none;
    border-radius: none
    box-shadow:none;
    margin-top: 12px;
    padding: none;
    width:none;
	}
}

a#ui-id-*.ui-corner-all.ui-state-hover{
    border: 1px solid #999;
    color: white;
    font-weight: normal;
    background-color: ;
}
</style>

	<form action='' method='post'>
		<p><label>Country:</label><input  type='text' name='country' value='' class='auto tt-query'></p>
	</form>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>	
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".auto").autocomplete({
		source: "search.php",
		minLength: 1
	});				

});
</script>
</body>
</html>