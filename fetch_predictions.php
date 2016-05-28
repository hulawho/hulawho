<?php

require("init.php");

//get all available games and game info


$pd = "SELECT flags.flag as team_b_flag, therest.* from
(
SELECT flags.flag as team_a_flag,predictions.* FROM(
SELECT username,matches.team_a as team_a_name, matches.team_b as team_b_name,predictions.team_a as score_a,predictions.team_b as score_b,predictions.time FROM `predictions` inner join matches on predictions.match_id=matches.match_id order by time desc)predictions
INNER JOIN flags ON predictions.team_a_name = flags.teams)therest
INNER JOIN flags ON therest.team_b_name = flags.teams where username='$username'  order by time desc";
$pd_exec = mysqli_query($con, $pd);
echo "<table >";
while ($row = mysqli_fetch_assoc($pd_exec)){
	
		echo "<tr>
		<td><div class='row'><div class='col-xs-3'><div class=''>".date('m-d-Y', $row['time'])."</div></div><div class='col-xs-3'><div class=''><img class='thumb_left' src='images/icons/".strtolower($row['team_a_flag']).".gif'/>".$row['team_a_name']."</div></div><div class='col-xs-3'><div class='score'>".$row['score_a']." - ".$row['score_b']."</div></div><div class='col-xs-3'><div class='pull-right'>".$row['team_b_name']."<img class='thumb_right' src='images/icons/".strtolower($row['team_b_flag']).".gif'/></div></div></div></td>
		</tr>";
	
}
echo "</table>";
?>
