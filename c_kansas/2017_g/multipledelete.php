                                  <?php
//INITIAL PAGE SETTINGS-----------

define("IN_GOLF_STATS", TRUE);
include_once("common.php");
include_once("headera.php");
if(authorize("superadmin,admin") != "success") die('You do not have permission to enter scores, <a href="login.php">Login first</a>');
//INITIAL PAGE SETTINGS-----------

if(!$_SESSION['username'] | !isset($_SESSION['password']) | !$_SESSION['permissions'])
{
$logged_in = FALSE;
} else {
$logged_in = TRUE;
}

?>	

<?php
$user = $_SESSION['username'];
echo $user;



 $connect = mysqli_connect("107.180.2.60","admin_kgs","usd_237", "golf_2016_g"); 

   $sql = "SELECT roster.id, roster.player_1, roster.school,  data_logins.school,
   data_logins.username FROM roster, data_logins WHERE 
   roster.school =  data_logins.school AND
  data_logins.username = '$_SESSION[username]'"; 
  
  
 $result = mysqli_query($connect, $sql);  

//INITIAL PAGE SETTINGS-----------
?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Delete Players from Roster</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="jquery.js"></script>  
           <style>  
                #box  
                {  
                     width:600px;  
                     background:gray;  
                     color:white;  
                     margin:0 auto;  
                     padding:10px;  
                     text-align:center;  
                }  
           </style>  
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <h3 align="center">Delete multiple rows by selecting checkboxes using Ajax Jquery with PHP</h3><br />  
                <?php  
                if(mysqli_num_rows($result) > 0)  
                {  
                ?>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th>Player</th>  
                               <th>Team</th>  
                               <th>Grade</th>  
                          </tr>  
                <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                          <tr id="<?php echo $row["id"]; ?>">  
                              <td><?php echo $row["player_1"]; ?></td> 
                               <td><?php echo $row["school"]; ?></td>  
                               <td><?php echo $row["grade"]; ?></td>  
                               <td><input type="checkbox" name="id[]" class="delete_customer" value="<?php echo $row["id"]; ?>" /></td>  
                          </tr>  
                <?php  
                     }  
                ?>  
                     </table>  
                </div>  
                <?php  
                }  
                ?>  
                <div align="center">  
                     <button type="button" name="btn_delete" id="btn_delete" class="btn btn-success">Delete</button>  
                </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#btn_delete').click(function(){  
           if(confirm("Are you sure you want to delete this?"))  
           {                                                                                                            
                var id = [];  
                $(':checkbox:checked').each(function(i){  
                     id[i] = $(this).val();  
                });  
                if(id.length === 0) //tell you if the array is empty  
                {  
                     alert("Please Select atleast one checkbox");  
                }  
                else  
                {  
                     $.ajax({  
                          url:'deletemultiple.php',  
                          method:'POST',  
                          data:{id:id},  
                          success:function()  
                          {  
                               for(var i=0; i<id.length; i++)  
                               {  
                                    $('tr#'+id[i]+'').css('background-color', '#ccc');  
                                    $('tr#'+id[i]+'').fadeOut('slow');  
                               }  
                          }  
                     });  
                }  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });  
 </script>  