<?php

$sqrt     = function($v) {return sqrt($v);};
$halve    = function($v) {return $v / 2;};
$plusFive = function($v) {return $v + 5;};

$pipe = function($num, ...$args) {
	return array_reduce($args, function($acc, callable $func) {
		return $func($acc);
	}, $num);
};

$suchFun = $pipe(16, $sqrt, $halve, $plusFive);
echo $suchFun;