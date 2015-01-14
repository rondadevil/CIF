<script>

    $('#p_name, #p_rank').bind('keypress blur', function() {

        $('#rank_name').val($('#p_rank').val() + ' ' +
            $('#p_name').val() );
    });
</script>