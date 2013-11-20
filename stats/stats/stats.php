<?php
require_once(dirname(__FILE__).'/lib/Season.php');
$enableCaching = false;
$gameJsonFile = 'stats.2013.json';

@session_start();

if(array_key_exists('stats', $_SESSION) && $enableCaching == true)
	$season = $_SESSION['stats'];
else
{
	$string = file_get_contents(dirname(__FILE__).DIRECTORY_SEPARATOR.$gameJsonFile);
	$seasonJson=json_decode($string);

	$season = new Season();
	$season->name = $seasonJson->name;
	$season->startDate = $seasonJson->startDate;
	$season->endDate = $seasonJson->endDate;

	foreach($seasonJson->games as $gameJson)
	{
		$game = new Game();
		$game->date = $gameJson->date;
		$game->opponent = $gameJson->opponent;
		$game->location = $gameJson->location;
		$game->pointsAfterTouchdownAttempted = $gameJson->pointsAfterTouchdownAttempted;
		$game->pointsAfterTouchdownSucceeded = $gameJson->pointsAfterTouchdownSucceeded;
		$game->isHomeGame = ($gameJson->homeGame == 1);

		$season->addPointAfterTouchdownAttempts($gameJson->pointsAfterTouchdownAttempted);
		$season->addPointAfterTouchdownSuccesses($gameJson->pointsAfterTouchdownSucceeded);

		foreach($gameJson->kickoffs as $kickoffYardage)
		{
			$game->addKickoff($kickoffYardage);
			$season->addKickoff($kickoffYardage);
		}
		foreach($gameJson->punts as $puntYardage)
		{
			$game->addPunt($puntYardage);
			$season->addPunt($puntYardage);
		}

		foreach($gameJson->fieldGoals as $fieldGoalJson)
		{
			$fg = new FieldGoal($fieldGoalJson->distance, $fieldGoalJson->result);
			$game->addFieldGoal($fg);
			$season->addFieldGoal($fg);
		}

		$season->addGame($game);
	}

	$_SESSION['stats'] = $season;
}