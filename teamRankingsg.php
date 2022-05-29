


  <!--

1. 18 Hole Varsity Tournament
 2. 36 Hole Varsity Tournament
 3. 9 Hole Varsity Tournament
 4. Dual or Match Play
 5. 18 Hole JV Tournament
 6. 9 Hole JV Tournament
7. Do Not Include

Status Codes: 
1 = Varsity on a Team,
 2 = Varsity No Team, 
3 = JV, 
4 = C team 
5 = DQ, 
6 = WD


    -->





    <?php



include_once("dbconnectg.php"); 



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
 

<script src="vendor/jquery/jquery-2.1.4.min.js"></script>
<script src="vendor/jquery/jquery-ui.js"></script>
<script src="vendor/jquery/bootstrap.min.js"></script>
<link href = "vendor/jquery/jquery-ui.css" rel = "stylesheet">   
<style>

.list-group-item {
font-size: 80%;

line-height: .5;

</style> 



</head>
   <?php //include("header.php");  ?>   

<!-- Page Content -->
<div class="container">

<!-- Page Heading/Breadcrumbs -->




<!-- Image Header  <center>
<img class="img-fluid rounded mb-4" src="images\rankings.png" alt="">
      --> 
<!-- Marketing Icons Section -->
<div class="row">


<!--    <div class="alert alert-danger">
<marquee><h1>Team Rankings we be down during State Tournaments.</h1></marquee>
</div>     -->



<div class="col-lg-12 mb-12 ">


        <h4 class="card-header bg-dark">  

<center>        <a href="TeamScores.php?classification=<?php echo $classification; ?>&state=<?php echo $state; ?>&db=girls">  Team Rankings</a></h4>
 </center>       
        



<body>


<button class="block" onclick="goBack()">Go Back</button>

<script>
function goBack() {
window.history.back();
}
</script>

<center>     <?php echo "To Clear all filters refresh the page. Kansas schools must join KGCA to be included in Rankings." ?></h4> <br>
1. 18 Hole Varsity Tournament
2. 36 Hole Varsity Tournament
3. 9 Hole Varsity Tournament
4. Dual or Match Play
5. 18 Hole JV Tournament
6. 9 Hole JV Tournament
7. Do Not Include
 <hr>
<h3 bgcolor = '#FFFF00'>NOTE: You must select Trny Status 1 for 18 Hole or 3 for 9 Hole Tournies, or they will be combined.</h3>
 </center>   
<!-- Page Content -->
<div class="container">
<div class="row">
 <br />
<div class="col-md-2">                    
 

        
            <div class="list-group">
<h3>Trny Status</h3>   <div style="height: 120px; overflow-y: auto; overflow-x: hidden;">
            <?php
              
            $query = "
            SELECT DISTINCT(tr.status) as stat
            FROM tournament tr 
            INNER JOIN scores s ON s.tid = tr.id 
            WHERE tr.status != '' 
            GROUP by tr.status 
            ORDER BY tr.status ASC ";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
       
            foreach($result as $row)
            { 
            ?>
            <div class="list-group-item checkbox">
                <label><input type="checkbox" class="common_selector stat" value="<?php echo $row['stat']; ?>" > <?php echo $row['stat']; ?></label>
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
<h3>regionals</h3>     <div style="height: 140px; overflow-y: auto; overflow-x: hidden;">
            <?php
              
            $query = "
            SELECT DISTINCT(regionals), r.pid, player_1 FROM roster r 
           INNER JOIN team t ON r.tmid = t.tmid 
           LEFT JOIN scores s on s.tmid = t.tmid
            WHERE regionals != '' GROUP by regionals 
            ORDER BY regionals ASC ";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach($result as $row)
            { 
            ?>
            <div class="list-group-item checkbox">
                <label><input type="checkbox" class="common_selector regionals" value="<?php echo $row['regionals']; ?>" > <?php echo $row['regionals']; ?> </label>
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
var stat = get_filter('stat');
var classification = get_filter('classification');
var league = get_filter('league');
var regionals = get_filter('regionals');
var school = get_filter('school');

$.ajax({
    url:"fetch_datag.php",
    method:"POST",
    data:{action:action, stat:stat, classification:classification, regionals:regionals, league:league, school:school},
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
      


      
       <?php

//authentication for coaches to get to their pages, not for public pages.


?> 


   

  </div>   
</div>     








</body>

</html>
        