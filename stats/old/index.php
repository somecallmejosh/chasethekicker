<?php
//requiring this file will create a var called $season with the general stats, then $season->games array with each game populated.
require_once('stats/stats.php');
?>

<h2>Summary</h2>
<div>Touchbacks: <?php echo $season->getTotalTouchbacks();?></div>
<div>Field Goals: <?php echo $season->getTotalFieldGoals();?></div>
<div>Extra Points: <?php echo $season->getTotalPointsAfterTouchdown();?></div>
<div>Total Games Played: <?php echo $season->getTotalGamesPlayed();?></div>
<div>Total Points Scored: <?php echo $season->getTotalPointsScored();?></div>

<div>Field Goal Percentage: <?php echo number_format($season->getFieldGoalAverage()*100, 1);?> %</div>
<div>Field Goal Long: <?php echo $season->getLongestFieldGoalDistance();?> yards</div>
<div>PAT %: <?php echo number_format($season->getPointAfterTouchdownAverage()*100, 1);?> %</div>
<div>TB %: <?php echo number_format($season->getTouchbackAverage()*100, 1);?> %</div>

<h2>Details</h2>
<table>
	<thead>
		<tr>
			<th>Date</th>
			<th>Opponent</th>
			<th>Location</th>
			<th>Kickoffs</th>
			<th>Kickoff Yards</th>
			<th>FG Attempts</th>
			<th>FGs Made</th>
			<th>PAT Attempts</th>
			<th>PATs Made</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($season->games as $game):?>
		<tr>
			<td><?php echo date('n/j', strtotime($game->date))?></td>
			<td><?php echo $game->opponent?></td>
			<td><?php echo $game->location?></td>
			<td><?php echo $game->getTotalKickoffs()?></td>
			<td><?php echo $game->getTotalKickoffYards()?></td>
			<td><?php echo $game->getTotalFieldGoalAttempts()?></td>
			<td><?php echo $game->getTotalFieldGoalsMade()?></td>

			<td><?php echo $game->getTotalPointsAfterTouchdownAttempts()?></td>
			<td><?php echo $game->getTotalPointsAfterTouchdownMade()?></td>

		</tr>
		<?php endforeach;?>
</table>