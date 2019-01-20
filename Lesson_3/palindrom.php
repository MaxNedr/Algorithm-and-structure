<?php

function str_reverse_array($string)
{
    $split = str_split($string);
    $reverse = array_reverse($split);
    return [$split, $reverse];
}
function isPalindrome($string1, $string2, $index, $count)
{
    if ($count > 0) {
        if ($string1[$index] === $string2[$index]) {
            isPalindrome($string1, $string2, $index + 1, $count - 1);
        } else {
            echo 'Не палиндром!';
        }
    } else {
        echo 'Палиндром!';
    }
}
$string = 'ststso';
$strings = str_reverse_array($string);
$count = count($strings[0]);
isPalindrome($strings[0], $strings[1], 0, $count);