<h1>Add a Location</h1>

<form method="post" action="add_location.php" name="add_location_form" id="add_location_form">
    
    
    <div class="formitem">
        <label for="street">Street Address:</label>
        <input type="text" id="street" name="street" />
    </div>
    
    <div class="formitem">
        <label for="city"> City:</label>
        <input type="text" id="city" name="city" />
    </div>
    
  
    
    <div class="formitem">
        <label for="zip">Zip:</label>
        <input type="text" id="zip" name="zip" />
    </div>
    
    <div class="formitem">
        <label for="address_of_salon">Full Address:</label>
        <input type="text" id="latlongaddress" name="address" size='50'/>
    </div>
    
    <div class="formitem">
        <input type="submit" id="location_submit" name="location_submit" value="Add Location" class="addBtn" />
    </div>
    
    
</form>
<script src="includes/overall/js/jquery.min.js"></script>
<script>

$('#street, #city, #state, #zip').bind('keypress blur', function() {
        
    $('#latlongaddress').val($('#street').val() + ' ' +
                             $('#city').val() + ', ' +
                             
                             $('#zip').val() );
});
</script>

</body>

</html>

