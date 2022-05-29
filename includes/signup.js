// JavaScript Document

$("#sub").click( function () {
$.post ( $("#myForm").attr("action"), $("#myForm :input").serializeArray(), function(info) { $("(#result").html(info);} );
redirect();
});

$("#myForm").submit ( function ()  {
           return false;
});

function clearInput() {
   $("#myForm :input").each( function(){
     $(this).val('');
  });
}  

function redirect () {
$(location).attr('href',"welcome.php");
};