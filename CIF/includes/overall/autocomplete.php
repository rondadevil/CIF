<script type="text/javascript" src="includes/overall/js/jquery-ui.min.js"></script>
<script type="text/javascript">
    $(function() {

        //autocomplete
        $(".autocom").autocomplete({
            source: "autocom/search.php",
            minLength: 0
        });

    });
</script>