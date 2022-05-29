<?php     


 if(!empty($_GET['db']))
{
$db = $_GET['db'];
}

$dataBase = $db;

switch ($dataBase) {
    case "boys":
        include_once("databaseconnect.php");    
        break;
    case "girls":
        include_once("dbconnectg.php"); 
        break;
    default:
        echo "<h1>Database Unknown</h1>";
}

 
include("analyticstracking.php");

// echo $database;


               
if(!empty($_GET['classification']))
{
$classification = $_GET['classification'];
}

if(!empty($_GET['state']))
{
$state = $_GET['state'];
}

                 

?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
         

  <style>

.list-group-item {
  font-size: 80%;

   line-height: .5;

</style> 



            
</head>
  


           <?php //include("header.php");  ?>   


       
             <h4 class="card-header bg-dark">  
       
        <center>        <a href="TeamScores.php?classification=<?php echo $classification; ?>&state=<?php echo $state; ?>&db=<?php echo $db; ?>">  Team Rankings</a></h4>
         </center>       
                
      


<body>

       
   <button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>
  <body> 
      <div class="container">

      <!-- Page Heading/Breadcrumbs -->
  



      <!-- Image Header  <center>
      <img class="img-fluid rounded mb-4" src="images\rankings.png" alt="">
              --> 
      <!-- Marketing Icons Section -->
      <div class="row">
 <div class="col-lg-12 mb-12 ">
                 <br> <br>
      
                <h4 class="card-header bg-dark">  
                   
     <center>      <?php echo "To Clear all filters refresh the page. " ?></h4>
         </center>   
    <!-- Page Content -->
    <div class="container">
        <div class="row">
         <br />
      <div class="col-md-2">                    
         

                
                    <div class="list-group">
     <h3>State</h3>   <div style="height: 40px; overflow-y: auto; overflow-x: hidden;">
                    <?php
                      
                    $query = "
                    SELECT DISTINCT(state) FROM team t 
                    INNER JOIN roster r ON t.tmid = r.tmid
                    LEFT JOIN scores s on s.tmid = t.tmid 
                    WHERE state != '' GROUP by state ORDER BY state ASC  ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
               
                    foreach($result as $row)
                    { 
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector state" value="<?php echo $row['state']; ?>" > <?php echo $row['state']; ?></label>
                    </div>
                    <?php    
                   }

                    ?>
                </div> 
                     </div>
                    
    <div class="list-group">
    
   

     <h3>Classification</h3>   <div style="height: 150px; overflow-y: auto; overflow-x: hidden;">
                    <?php
                      
                    $query = "
                     SELECT DISTINCT(classification) FROM team t
                     WHERE classification != '0A' GROUP by classification ORDER BY classification ASC ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    { 
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector classification" value="<?php echo $row['classification']; ?>" > <?php echo $row['classification']; ?> Class</label>
                    </div>
                    <?php    
                   }

                    ?>
                </div>
                     </div> 
                        
    <div class="list-group">
     <h3>League</h3>   <div style="height: 100px; overflow-y: auto; overflow-x: hidden;">
     <?php              
                    $query = "SELECT DISTINCT(league) FROM team WHERE league != '' GROUP by league ORDER BY league ASC  ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {  
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector league" value="<?php echo $row['league']; ?>"  > <?php echo $row['league']; ?></label>
                    </div>
                    <?php
                   }
                    ?> 
                </div> 
                    </div>
                        
                                    <div class="list-group">
     <h3>Grade</h3>     <div style="height: 40px; overflow-y: auto; overflow-x: hidden;">
                    <?php
                      
                    $query = "
                    SELECT DISTINCT(grade), r.pid, player_1 FROM roster r 
                   INNER JOIN team t ON r.tmid = t.tmid 
                   LEFT JOIN scores s on s.tmid = t.tmid
                    WHERE grade > '2' GROUP by grade 
                    ORDER BY grade ASC ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    { 
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector grade" value="<?php echo $row['grade']; ?>"> <?php echo $row['grade']; ?>th Grade </label>
                    </div>
                    <?php    
                   }

                    ?>
                </div>  
                     </div>
                     
                     
                                             
                                    <div class="list-group">
     <h3>School</h3>     <div style="height: 340px; overflow-y: auto; overflow-x: hidden;">
                    <?php
                      
                    $query = "
                    SELECT t.tmid, state, school, count(pid) as pid FROM team t 
                   INNER JOIN roster r ON t.tmid = r.tmid 
                   WHERE `state` = 'KS' AND pid > 0 
                    group by tmid ORDER BY school ASC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    { 
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector school" value="<?php echo $row['school']; ?>" > <?php echo $row['school']; ?> </label>
                    </div>
                    <?php    
                   }

                    ?>
                </div>  
                     </div>
                     
                     
                     
                     
                  </div>
     

            <div class="col-md-10">
             <br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
 text-align:center; 
 background: url('images/giphy.gif') no-repeat center; 
 height: 150px;
}
</style>


<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var state = get_filter('state');
        var classification = get_filter('classification');
        var league = get_filter('league');
        var grade = get_filter('grade');
        var school = get_filter('school');
  
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, state:state, classification:classification, grade:grade, league:league, school:school},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });
    



    });

</script>        

             
                
                
            <div class="card-body">
              <p class="card-text">
              
       
       


           
    
          </div>   
        </div>     
        
        
        
        


  

  </body>

</html>
                