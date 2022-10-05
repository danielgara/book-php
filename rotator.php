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
		$temp = $listNumbers[count($listNumbers)-1];
		array_splice($listNumbers,count($listNumbers)-1);
		array_unshift($listNumbers, $temp);
	}
}

class OrderNumber{
	public static function selectSort($listNumbers){
		$i = 0;
		$end = count($listNumbers)-1;
		while($i < $end){
			OrderNumber::selectSortOne($listNumbers, $end);
			$end--;
		}
		var_dump($listNumbers);
	}
	
	public static function selectSortOne(&$listNumbers, $k){
		$i = 0;
		while($i < $k){
			if($listNumbers[$i] > $listNumbers[$i+1]){
				$temp = $listNumbers[$i];
				$listNumbers[$i] = $listNumbers[$i+1];
				$listNumbers[$i+1] = $temp;
			}
			$i++;
		}
	}
}

$listNumbers = [1,4,6,23,2];
$k = 24;
Rotator::rotate($listNumbers,$k);
print_r($listNumbers);

OrderNumber::selectSort($listNumbers);

class FindNumbers {
	public static function findAll(){
		$n = 100;
		$results = array();
		$a = 1;
		while($a <= $n){
			$b = 1;
			while($b <= $n){
				$summ = $a**3 + $b**3;
				if(array_key_exists($summ,$results)){
					if(in_array($a, $results[$summ]) and in_array($b, $results[$summ])){
						//nothing
					}else{
						array_push($results[$summ],$a,$b);
					}
				}else{
					$results[$summ] = array($a, $b);
				}
				$b = $b+1;
			}
			$a = $a+1;
		}
		
		foreach($results as $r){
			if(count($r)>2){
				#print_r($r);
			}
		}
	}
}

FindNumbers::findAll();