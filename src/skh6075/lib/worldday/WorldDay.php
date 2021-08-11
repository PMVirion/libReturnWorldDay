<?php

namespace skh6075\lib\worldday;

use pocketmine\world\World;

final class WorldDay{

	public const WORLD_MORNING = 0;
	public const WORLD_DAY = 1;
	public const WORLD_EVENING = 2;
	public const WORLD_NIGHT = 3;

	public static function getReturnWorldDay(World $world): int{
		$dayTime = $world->getTimeOfDay();
		if($dayTime < 2000){
			return self::WORLD_MORNING;
		}
		if($dayTime < 12000){
			return self::WORLD_DAY;
		}
		if($dayTime < 14000){
			return self::WORLD_EVENING;
		}
		if($dayTime < 23000){
			return self::WORLD_NIGHT;
		}
		return self::WORLD_MORNING;
	}
}