<script>
$(document).ready(function(){
load_data();
 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   dataType:"json",
   success:function(data)
   {
    $('#institute').text(data.length);
    var html = '';
    if(data.length > 0)
    {
     for(var count = 0; count < data.length; count++)
     {
        $("#institute").load("data[count].institute");
    }
    }
    else
    {
     console.log("Error");
    }
   }
  })
 }
});
</script>