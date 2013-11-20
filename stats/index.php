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
			<th>Field Goals</th>
			<th>Kickoffs</th>
			<th>Punts</th>
			<th>PATs</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($season->games as $game):?>
		<tr>
			<td><?php echo date('n/j/Y', strtotime($game->date))?></td>
			<td><?php echo ($game->isHomeGame) ? 'H' : '@'; ?>&nbsp;<?php echo $game->opponent?></td>
			<td>
				<?php foreach($game->fieldGoals as $fieldGoal):?>
					<?php echo $fieldGoal->distance?>yd&nbsp;
					<?php echo ($fieldGoal->result) ? 'Y' : 'N';?><br />
				<?php endforeach;?>
			</td>
			<td>
				<?php foreach($game->kickoffs as $kickoff):?>
					<?php echo $kickoff?>yd<br />
				<?php endforeach;?>
			</td>
			<td>
				<?php foreach($game->punts as $punt):?>
					<?php echo $punt?>yd<br />
				<?php endforeach;?>
			</td>
			<td><?php echo $game->getTotalPointsAfterTouchdownMade()?> of <?php echo $game->getTotalPointsAfterTouchdownAttempts()?></td>

		</tr>
		<?php endforeach;?>
</table>