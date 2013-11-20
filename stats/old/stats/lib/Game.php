<?php

/**
  * Object to represent the kicker's stats in a single football game.
  *
  * @author  James M. Cori <james.cori@rootelement.net>
  *
  * @since 1.0
  *
  */


require_once('FieldGoal.php');
class Game
{
	public $date;
	public $opponent;
	public $location;
	public $kickoffs;
	public $totalKickoffYards;

	public $punts;
	public $totalPuntYards;

	public $pointsAfterTouchdownAttempted;
	public $pointsAfterTouchdownSucceeded;

	public $fieldGoals;
	public $fieldGoalAttempts;
	public $fieldGoalsMade;

	public function addFieldGoal(FieldGoal $fieldGoal)
	{
		$this->fieldGoals[] = $fieldGoal;
		$this->fieldGoalAttempts++;

		if($fieldGoal->result)
			$this->fieldGoalsMade++;

	}

	public function addPunt($distance)
	{
		$this->punts[] = $distance;
		$this->totalPuntYards += $distance;
	}

	public function addKickoff($distance)
	{
		$this->kickoffs[] = $distance;
		$this->totalKickoffYards += $distance;
	}

	public static function kickoffIsTouchback($distance)
	{
		return ($distance > 60);
	}

	public function getTotalKickoffs()
	{
		return count($this->kickoffs);
	}

	public function getTotalKickoffYards()
	{
		return $this->totalKickoffYards;
	}

	public function getTotalPunts()
	{
		return count($this->punts);
	}

	public function getTotalPuntYards()
	{
		return $this->totalPuntYards;
	}

	public function getTotalFieldGoalAttempts()
	{
		return $this->fieldGoalAttempts;
	}

	public function getTotalFieldGoalsMade()
	{
		return $this->fieldGoalsMade;
	}

	public function getTotalPointsAfterTouchdownAttempts()
	{
		return $this->pointsAfterTouchdownAttempted;
	}

	public function getTotalPointsAfterTouchdownMade()
	{
		return $this->pointsAfterTouchdownSucceeded;
	}
}