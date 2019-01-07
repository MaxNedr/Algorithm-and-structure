<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07.01.2019
 * Time: 12:23
 */


$array = [300, 1000, 1, 54, 1, 23, 1, 1000, 3000, 40000, 10, 4, 5, 3, 1, 4];
/*for ($i = 0; $i < 20; $i++) {
    $array[] = rand(-10, 40);
}*/

print_r(merger_sort($array));

function merger_sort($arr)
{
    $first_arr = [];
    $second_arr = [];

    $arr_new = array_chunk($arr, 2);
    foreach ($arr_new as $elem) {
        if ($elem[0] > $elem[1]) {
            list($elem[0], $elem[1]) = array($elem[1], $elem[0]);
        }
        $first_arr[] = $elem;

    }
  /*print_r($first_arr);
    echo '<br>';*/

    for ($i = 0; $i <count($first_arr); $i++) {
        for ($g = 1; $g <count($first_arr); $g++) {
           /* if ($first_arr[$i][0] >= $first_arr[$g][0]) {
                list($first_arr[$i][0], $first_arr[$g][0]) = array($first_arr[$g][0], $first_arr[$i][0]);
            }*/
            print_r($first_arr[$i]);
            echo '<br>';
            print_r($first_arr[$g]);
            echo '<br>';
            echo '<br>';

        }
    }
    /*if ($first_arr[0][0] > $first_arr[1][0]) {
        list($first_arr[0][0], $first_arr[1][0]) = array($first_arr[1][0], $first_arr[0][0]);
    }*/

    return $first_arr ;
}