<!-- Bootstrap core JavaScript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="includes/overall/js/jquery.min.js"></script>
<script src="includes/overall/js/bootstrap.min.js"></script>

<script src="includes/overall/js/BootSideMenu.js"></script>






<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

<script type="text/javascript">
    $('#peoplemenu').BootSideMenu({side: "left", autoClose: false});
    $('#test').BootSideMenu({side: "left", autoClose: true});
    $('#test2').BootSideMenu({side: "right"});
</script>
<script type="text/javascript">
    function autocomplet() {
        var min_length = 0; // min caracters to display the autocomplete
        var keyword = $('#rank').val();
        if (keyword.length >= min_length) {
            $.ajax({
                url: 'search.php',
                type: 'POST',
                data: {keyword:keyword},
                success:function(data){
                    $('#name_list').show();
                    $('#name_list').html(data);
                }
            });
        } else {
            $('#country_list_id').hide();
        }
    }

    // set_item : this function will be executed when we select an item
    function set_item(item) {
        // change input value
        $('#person_name').val(item);
        // hide proposition list
        $('#name_list').hide();
    }

</script>
<footer>
    <h2><a href="login.php"><i>Tutorial:</i> Copyright (c) rOnDaDeViL</a></h2>

</footer>

<style>

    footer{
        background-color: #080808;
        bottom: 0;
        box-shadow: 0 -1px 2px rgba(0,0,0,0.4);
        height: 40px;
        left: 0;
        position: fixed;
        width: 100%;
        z-index: 100000;
    }

    footer h2{
        font-size: 14px;
        font-weight: normal;
        position: absolute;
        top:0;
        left: 50%;
        bottom:0;
        margin-left: -420px;
        padding:13px 20px 0;
        border:1px solid #000;
        border-width:0 1px;
        background-color:rgba(0,0,0,0.6);
        box-shadow:0 0 5px #000 inset;
        line-height: 1;
        margin-top: 0;
    }

    footer h2 a{
        color: #EEEEEE !important;
        text-decoration:none !important;
    }

    footer h2 i{
        font-style:normal;
        color:#888;
    }
</style>

</body>

</html>
