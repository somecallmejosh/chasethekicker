<?php
/**
  * Object to represent a field goal
  *
  * @author  James M. Cori <james.cori@rootelement.net>
  *
  * @since 1.0
  * @param int    $distance  Distance in yards for the fieldgoal attempt
  * @param bool   $result    If the fieldgoal was good
  *
  */

class FieldGoal
{
	public $distance;
	public $result;

	public function FieldGoal($distance, $result)
	{
		$this->distance = $distance;
		$this->result = ($result == 1)?true:false;
	}
}