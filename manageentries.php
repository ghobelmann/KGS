                               
<?php



       define("IN_GOLF_STATS", TRUE);
       
if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}

$user = $_SESSION['username'];

echo $user;
       
       
  if(!empty($_GET['tournament']))
{
$tournament = $_GET['tournament'];
}
 echo $tournament;

?>

 
   
    <html>  
      <head>  
           <title>Manage Your Tournament Entries</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <h3 align="center">GWAL Points Management</h3><br />  
                     
       
            
            
                     <div id="live_data"></div>                 
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"selectentries.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var player_1 = $('#player_1').text();  
           var team = $('#team').text();
           var points = $('#points').text();  
           var total = $('#total').text();   
           if(player_1 == '')  
           {  
                alert("Enter Player Name");  
                return false;  
           }  
           if(team == '')  
           {  
                alert("Enter team");  
                return false;  
           }  
            if(total == '')  
           {  
                alert("Enter Grade");  
                return false;  
           }
           $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{player_1:player_1, team:team, points:points, total:total},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"editlivedata.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.player_1', function(){  
           var id = $(this).data("id1");  
           var player_1 = $(this).text();  
           edit_data(id, player_1, "player_1");  
      });  
      $(document).on('blur', '.team', function(){  
           var id = $(this).data("id2");  
           var team = $(this).text();  
           edit_data(id,team, "team");  
           
      });  
            $(document).on('blur', '.points', function(){  
           var id = $(this).data("id2");  
           var points = $(this).text();  
           edit_data(id,points, "points");  
           
      });  
            $(document).on('blur', '.total', function(){  
           var id = $(this).data("id3");  
           var total = $(this).text();  
           edit_data(id,total, "total");  
      });
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id3");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"deleteliveroster.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script>  
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   



<p><?php include("footer.php"); ?>&nbsp;</p>

