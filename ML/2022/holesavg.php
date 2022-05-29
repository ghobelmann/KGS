<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<div id="Layer3" style="position:absolute; width:792px; height:539px; z-index:3; left: 592px; top: 128px;">
  <table width="624" height="402" border="1">
    <tr>
      <td width="71"><div align="center"></div></td>
      <td width="49"><div align="center"><em><strong>1</strong></em></div></td>
      <td width="49"><div align="center"><em><strong>2</strong></em></div></td>
      <td width="49"><div align="center"><em><strong>3</strong></em></div></td>
      <td width="44"><div align="center"><em><strong>4</strong></em></div></td>
      <td width="43"><div align="center"><em><strong>5</strong></em></div></td>
      <td width="43"><div align="center"><em><strong>6</strong></em></div></td>
      <td width="43"><div align="center"><em><strong>7</strong></em></div></td>
      <td width="43"><div align="center"><em><strong>8</strong></em></div></td>
      <td width="43"><div align="center"><em><strong>9</strong></em></div></td>
      <td width="50"><div align="center"><em><strong>Front</strong></em></div></td>
    </tr>
    <tr>
      <td><div align="center">A </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole1) FROM scores WHERE position  = '1' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole2) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole3) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole4) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole5) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-5;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole6) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole7) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole8) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole9) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">B </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole1) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole2) FROM scores WHERE position  = '2' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole3) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole4) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole5) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-5;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole6) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole7) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole8) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole9) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">C </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole1) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole2) FROM scores WHERE position  = '3' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole3) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole4) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole5) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-5;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole6) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole7) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole8) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole9) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">D </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole1) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole2) FROM scores WHERE position  = '4' ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole3) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole4) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole5) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-5;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole6) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole7) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole8) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole9) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">+/- Par All Players </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole1) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong></div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole2) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong></div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole3) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong></div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole4) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3;?>
      </strong></div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole5) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-5;?>
      </strong></div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole6) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong></div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole7) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong></div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole8) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong></div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole9) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong></div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong></div></td>
    </tr>
    <tr>
      <td><div align="center">Avg. Score </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole1) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2); ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole2) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2); ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole3) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2); ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole4) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole5) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole6) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole7) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole8) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole9) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">Par</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">3</div></td>
      <td><div align="center">5</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">36</div></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center"><em><strong>10</strong></em></div></td>
      <td><div align="center"><em><strong>11</strong></em></div></td>
      <td><div align="center"><em><strong>12</strong></em></div></td>
      <td><div align="center"><em><strong>13</strong></em></div></td>
      <td><div align="center"><em><strong>14</strong></em></div></td>
      <td><div align="center"><em><strong>15</strong></em></div></td>
      <td><div align="center"><em><strong>16</strong></em></div></td>
      <td><div align="center"><em><strong>17</strong></em></div></td>
      <td><div align="center"><em><strong>18</strong></em></div></td>
      <td><div align="center"><em><strong>Back</strong></em></div></td>
    </tr>
    <tr>
      <td><div align="center">A Players </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole10) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole11) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole12) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole13) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole14) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-5;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole15) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole16) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole17) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole18) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores WHERE position  = '1'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">B </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole10) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole11) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole12) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole13) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole14) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-5;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole15) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole16) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole17) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole18) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores WHERE position  = '2'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">C Players </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole10) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole11) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole12) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole13) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole14) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-5;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole15) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole16) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole17) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole18) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores WHERE position  = '3'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">D Players </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole10) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole11) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole12) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole13) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole14) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-5;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole15) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole16) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole17) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole18) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores WHERE position  = '4'";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">+/- Par All Players </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole10) FROM scores ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole11) FROM scores ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole12) FROM scores ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4; ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole13) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-3;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole14) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-5;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole15) FROM scores ";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole16) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole17) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole18) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2)-4;?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">Avg. Score </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole10) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2); ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole11) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2); ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole12) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2); ?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole13) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole14) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole15) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole16) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole17) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(hole18) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
      <td><div align="center"><strong>
          <?php $query = "SELECT AVG(total) FROM scores";        
	$result = @mysql_query ($query); // Run the query.
	$row = mysql_fetch_array($result);
	echo round ($row['0'], 2);?>
      </strong> </div></td>
    </tr>
    <tr>
      <td><div align="center">Par</div></td>
      <td><div align="center">3</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">3</div></td>
      <td><div align="center">5</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">4</div></td>
      <td><div align="center">35</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
