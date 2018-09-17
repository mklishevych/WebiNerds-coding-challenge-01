<?php
$arr1 = [1,2,3,4,5];
$arr2 = [2,4,8];

function intersection(array $arr1, array $arr2) {
	$lessArr = count($arr1) < count($arr2) ? $arr1 : $arr2;
	$biggerArr = count($arr1) > count($arr2) ? $arr1 : $arr2;

	$newArr = [];
	foreach($lessArr as $element) {
		if(array_search($element, $biggerArr)) {
			$newArr[] = $element;
		}
	}
	
	return $newArr;
}

$intersection = intersection($arr1, $arr2);
var_dump($intersection);