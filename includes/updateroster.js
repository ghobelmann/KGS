$(document).ready( function() {
 done();
});
 
function done() {
	  setTimeout( function() { 
	  updates(); 
	  done();
	  }, 200);
}
 
function updates() {
	 $.getJSON("fetchroster.php", function(data) {
       $("ul").empty();
	   $.each(data.result, function(){
	    $("ul").append("<li>ID: "+this['id']+"</li>
                            <li>Name: "+this['player_1']+"</li>
                            <li>School: "+this['school']+"</li>
                            <br />");
	   });
 });
}