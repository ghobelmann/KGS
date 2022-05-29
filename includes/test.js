  <script> 
   $(function () 
  {
    $.ajax({                                      
      url: 'test.php', data: "", dataType: 'json',  success: function(data)        
      { 
        var id = data[0];              //get id
        var vname = data[1];           //get name
         $('#output').php("<b>id: </b>"+id+"<b> name: </b>"+vname); 
      } 
    });
  }); 
         </script>// JavaScript Document
