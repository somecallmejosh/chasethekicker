<?php
/**
  * Object to represent the kicker's stats in an entire football season.
  *
  * @author  James M. Cori <james.cori@rootelement.net>
  *
  * @since 1.0
  *
  */

require_once('Game.php');
class Season
{
	public $name;
	public $startDate;
	public $endDate;
	public $games;

	public $totalKickoffYards;
	public $numberOfKickoffs;

	public $totalPuntYards;
	public $numberOfPunts;
	public $numberOfTouchbacks;

	public $totalFieldGoalYards;
	public $numberOfFieldGoalAttempts;
	public $numberOfFieldGoalSuccesses;
	public $longestFieldGoalYardage = 0;

	public $totalPointsAfterTouchdownAttempted;
	public $totalPointsAfterTouchdownSucceeded;


	public function addGame(Game $game)
	{
		$this->games[] = $game;
	}

	public function addPunt($distanceInYards)
	{
		$this->totalPuntYards += $distanceInYards;
		$this->numberOfPunts++;
	}

	public function addKickoff($distanceInYards)
	{
		$this->totalKickoffYards += $distanceInYards;
		$this->numberOfKickoffs++;

		if(Game::kickoffIsTouchback($distanceInYards))
			$this->numberOfTouchbacks++;
	}

	public function addFieldGoal(FieldGoal $fieldGoal)
	{
		$this->totalFieldGoalYards += $fieldGoal->distance;
		$this->numberOfFieldGoalAttempts++;

		if((bool)$fieldGoal->result)
		{
			$this->numberOfFieldGoalSuccesses++;
			$this->longestFieldGoalYardage = max($this->longestFieldGoalYardage, $fieldGoal->distance);
		}
	}

	public function addPointAfterTouchdownAttempts($numberOfAttempts)
	{
		$this->totalPointsAfterTouchdownAttempted += $numberOfAttempts;
	}

	public function addPointAfterTouchdownSuccesses($numberOfSuccesses)
	{
		$this->totalPointsAfterTouchdownSucceeded += $numberOfSuccesses;
	}

	public function getTotalTouchbacks()
	{
		return $this->numberOfTouchbacks;
	}

	public function getTotalFieldGoals()
	{
		return $this->numberOfFieldGoalSuccesses;
	}

	public function getTotalPointsAfterTouchdown()
	{
		return $this->totalPointsAfterTouchdownSucceeded;
	}

	public function getTotalGamesPlayed()
	{
		return count($this->games);
	}

	public function getTotalPointsScored()
	{		
		return ($this->numberOfFieldGoalSuccesses * 3) + $this->totalPointsAfterTouchdownSucceeded;
	}




	public function getFieldGoalAverage()
	{
		if($this->numberOfFieldGoalAttempts > 0)
			return $this->numberOfFieldGoalSuccesses / $this->numberOfFieldGoalAttempts;
		else
			return 0;
	}

	public function getLongestFieldGoalDistance()
	{
		return $this->longestFieldGoalYardage;
	}

	public function getPointAfterTouchdownAverage()
	{
		if($this->totalPointsAfterTouchdownAttempted > 0)
			return $this->totalPointsAfterTouchdownSucceeded / $this->totalPointsAfterTouchdownAttempted;
		else
			return 0;
	}

	public function getTouchbackAverage()
	{
		if($this->numberOfKickoffs > 0)
			return $this->numberOfTouchbacks / $this->numberOfKickoffs;
		else
			return 0;
	}
}