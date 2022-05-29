 <?php
include_once("../dbconnectg.php");

 //authentication for coaches to get to their pages, not for public pages.

if(!isset($_SESSION['email']))
   // if there is no valid session
{
    header("Location:../login-system/index.php");
}


if($perm != '9')
   // if there is no valid session
{
    header("Location:../login-system/index.php");
}


 
?> 

       <?php         
    $sql = "SELECT *, team.school FROM users 
    INNER JOIN team on users.tmid = team.tmid WHERE users.email = '$_SESSION[email]'"; 
			$result = mysqli_query($conn,$sql) or die(mysqli_error());
				while($row = mysqli_fetch_array( $result )) {
			$userid = $row['id'];
      $fname = $row['first_name'];
      $lname = $row['last_name'];
      $email = $row['email'];
      $tmid = $row['tmid'];
      $phone = $row['phone'];
      $school= $row['school']; }
      //echo $userid;

      
 ?> 

















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address">
Greg Hobelmann
615 E Kansas Ave 
Smith Center KS.66967

Phone: (785) 620-7054
hobelmann@usd237.com</textarea>

            <div id="logo">

   

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/kgs.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

      <textarea id="address">
            
  <?php echo $fname; echo ' '; echo $lname;  ?>
  <?php echo $school; ?>
  <?php echo $phone; ?>
  <?php echo $email; ?>
  
        
         </textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea><?php echo(rand(10000,1000000)); ?>
                    </textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">2019-2020 Season</textarea></td>
                </tr>


            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Cost per Team</th>
		      <th># of Teams</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>Girls Team</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Yearly Subscription to kansasgolfscores.com $25.00 per year.</textarea></td>
		      <td><textarea class="cost">$25.00</textarea></td>
		      <td><textarea class="qty">1</textarea></td>
		      <td><span class="price">$25.00</span></td>
		  </tr>
      
      		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>Boys Team</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Yearly Subscription to kansasgolfscores.com $25.00 per year.</textarea></td>
		      <td><textarea class="cost">$25.00</textarea></td>
		      <td><textarea class="qty">1</textarea></td>
		      <td><span class="price">$25.00</span></td>
		  </tr>
    
      


		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"><b><font color = "red"><b> 
            Make Check Payable to Greg Hobelmann   <br>
            or send through PayPal to account  <br>
            hobelmann@usd237.com
          
          
          </font></td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$50.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$50.00</div></td>
		  </tr>


		      
		</table>
		

	
	</div>
	
</body>

</html>