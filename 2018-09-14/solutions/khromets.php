<?php

function intersection(array $arr1, array $arr2)
{
    $lessArr = count($arr1) < count($arr2) ? $arr1 : $arr2;
    $biggerArr = count($arr1) > count($arr2) ? $arr1 : $arr2;

    $newArr = [];
    foreach ($lessArr as $element) {
        if (in_array($element, $biggerArr, TRUE)) {
            $newArr[] = $element;
        }
    }

    return $newArr;
}

print_r(intersection([1,2,3,4,5], [2,4,8])); // Array ( [0] => 2 [1] => 4 )
print_r(intersection([], [2,4,8])); // Array ( )
print_r(intersection([1,2,3,4,5], [])); // Array ( )
