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
            
            Delete this Text and  
            Enter Your Schools Name   
            Address and Phone # Here
            Please print invoice and mail with payment.
            
            </textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea>000001</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">September1, 2017</textarea></td>
                </tr>


            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Item</th>
		      <th>Description</th>
		      <th>Cost per Player</th>
		      <th># of Players</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>Girls Team</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Yearly Subscription to kansasgolfscores.com $3.00 per player per year.</textarea></td>
		      <td><textarea class="cost">$3.00</textarea></td>
		      <td><textarea class="qty">0</textarea></td>
		      <td><span class="price">$0.00</span></td>
		  </tr>
      
      		  <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>Boys Team</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Yearly Subscription to kansasgolfscores.com $3.00 per player per year.</textarea></td>
		      <td><textarea class="cost">$3.00</textarea></td>
		      <td><textarea class="qty">0</textarea></td>
		      <td><span class="price">$0.00</span></td>
		  </tr>
      
      
      <tr class="item-row">
		      <td class="item-name"><div class="delete-wpr"><textarea>KGCA Membership</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea>Kansas Golf Coaches Association Membership - $5.00 per school per year. </textarea></td>
		      <td><textarea class="cost">$5.00</textarea></td>
		      <td><textarea class="qty">1</textarea></td>
		      <td><span class="price">$5.00</span></td>
		  </tr>
		  

		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"><b><font color = "red">Enter the Number of Golfers on your Team Under # of Players<b> <br>
          Then click outside the box for it to update. <br><br>
          
          
          Make Check Payable to Greg Hobelmann
          </font></td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$0.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$0.00</div></td>
		  </tr>


		      
		</table>
		

	
	</div>
	
</body>

</html>