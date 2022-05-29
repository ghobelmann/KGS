 <?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

$page_title="Home";
define("IN_GOLF_STATS", TRUE);
define('IN_PHP_AUTH', TRUE);
include("databaseconnect.php");
include("PHP_AUTH/check_auth.php");
if(authorize("public") != "success")
{
header("Location: login.php?error=1");
die();
}
include("header.php");
include("menubar.php");
?>
 
 
 <td width="30%" align="left" valign="top">
					<p align="center" class="style5">WEEKLY TEAM MATCHUPS</p>
					<table width="324" border="4" cellpadding="0" cellspacing="2" bordercolor="#000000">
                  <tr>
                    <td align="center">Team</td>
                    <td align="center">Score</td>
							<td align="center">Rnd</td>
							<td align="center"></td>
							<td align="center">Team</td>
							<td align="center">Score</td>
							<td align="center">Rnd</td>
						</tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT a FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['a']; ?>
                    </td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.a,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.a AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
               
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.a,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.a AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT b FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['b']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.b,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.b AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.b,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.b AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
						</tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT c FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['c']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.c,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.c AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.c,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.c AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT d FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['d']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.d,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.d AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.d,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.d AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
						</tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT e FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['e']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.e,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.e AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.e,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.e AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT f FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['f']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.f,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.f AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.f,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.f AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
						</tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT g FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['g']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.g,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.g AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.g,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.g AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT h FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['h']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.h,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.h AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.h,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.h AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
						</tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT i FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['i']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.i,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.i AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.i,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.i AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT j FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['j']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.j,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.j AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.j,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.j AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
						</tr>
                  <tr>
                    <td align="center"><?php $query = "SELECT k FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['k']; ?></td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.k AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.k AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
							<td align="center">vs</td>
							<td align="center"><?php $query = "SELECT l FROM matches";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['l']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.l,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.l AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
							<td align="center"><?php 
							$query = "SELECT scores.team, scores.date, count(scores.player_1) as count, matches.date, matches.l,
									sum(scores.points) as points
									FROM matches, scores WHERE scores.team = matches.l AND scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['count']; ?></td>
						</tr>
                  <tr>
                    <td align="center">Total </td>
                    <td align="center"><?php 
							$query = "SELECT scores.team, scores.date, matches.date, matches.k,
									sum(scores.points) as points
									FROM matches, scores WHERE  scores.date = matches.date";        
									$result = @mysql_query ($query); // Run the query.
									$row = mysql_fetch_array($result);
									echo $row['points']; ?></td>
                    <td align="center"></td>
                    <td align="center"></td>
							<td align="center"></td>
							<td align="center"></td>
							<td align="center"></td>
						</tr>
                </table>
			