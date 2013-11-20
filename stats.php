<?php include('includes/head.php'); ?>
  <div id="main-content">
    <h2 class="call-out">2013 Stats</h2>
    <div class="cols">
      <div class="col-1">
        <div class="label">FG %</div>
        <div class="result"><?php echo number_format($season->getFieldGoalAverage()*100, 1);?></div>
      </div>

      <div class="col-2">
        <div class="label">FG Long</div>
        <div class="result"><?php echo $season->getLongestFieldGoalDistance();?> yds</div>
      </div>
      <div class="col-3">
        <div class="label">PAT %</div>
        <div class="result"><?php echo number_format($season->getPointAfterTouchdownAverage()*100, 1);?></div>
      </div>
      <div class="col-4">
        <div class="label">TB %</div>
        <div class="result"><?php echo number_format($season->getTouchbackAverage()*100, 1);?></div>
      </div>
    </div>
  </div>
  <table>
    <thead>
      <tr>
        <th>Date</th>
        <th class="opponent">Opponent</th>
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
      <td class="opponent"><p><?php echo ($game->isHomeGame) ? '<span class="typcn typcn-home"></span> ' : '<span class="typcn typcn-at"></span> '; ?>&nbsp;<?php echo $game->opponent?></p></td>
      <td>
        <ul>
        <?php foreach($game->fieldGoals as $fieldGoal):?>
          <li><?php echo $fieldGoal->distance?>yd&nbsp;
          <?php echo ($fieldGoal->result) ? '<span class="typcn typcn-tick"></span>' : '<span class="typcn typcn-times"></span>';?>
          </li>
        <?php endforeach;?>
        </ul>
      </td>
      <td>
        <ul>
        <?php foreach($game->kickoffs as $kickoff):?>
          <li><?php echo $kickoff?>yd</li>
        <?php endforeach;?>
        </ul>
      </td>
      <td>
        <ul>
          <?php foreach($game->punts as $punt):?>
            <li><?php echo $punt?>yd</li>
          <?php endforeach;?>
        </ul>
      </td>
      <td><?php echo $game->getTotalPointsAfterTouchdownMade()?> of <?php echo $game->getTotalPointsAfterTouchdownAttempts()?></td>

    </tr>
    <?php endforeach;?>
    </tbody>
  </table>
<?php include('includes/footer.php') ?>