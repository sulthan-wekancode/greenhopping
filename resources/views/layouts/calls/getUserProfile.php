<script>
$(document).ready(function(){
    var userId = localStorage.getItem("ghUserId");
    $.ajax({
    url: 'getUserProfile',
    type : 'POST',  
     data: {userId : userId},
    success: function(message)
    {
    $('#username').val(message.userData.username);
    $('#email').val(message.userData.email);
    $('.username').html(message.userData.username);
    $('#lastLogin').html(message.userData.updated_at);
    }
    });

});
</script>

<script>
$(document).ready(function(){
  $( "#updateUserProfile" ).click(function() 
  {
    console.log('update PLS');
    });


});
</script>