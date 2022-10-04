<?php

class Rotator {
	public static function rotate(&$listNumbers, $k){
		$i=0;
		while($i < $k){
			Rotator::rotateOnce($listNumbers);
			$i=$i+1;
		}
	}
	
	public static function rotateOnce(&$listNumbers){
		$temp = $listNumbers[count($listNumbers)-1]; //get last element
		array_splice($listNumbers,count($listNumbers)-1); //remove last element
		array_unshift($listNumbers, $temp); //put last element first
	}
}
