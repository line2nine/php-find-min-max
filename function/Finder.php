<?php

function findMin($arr)
{
    $index = 0;
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $min . " at index " . $index;
}

function findMax($arr)
{
    $index = 0;
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($max < $arr[$i]) {
            $max = $arr[$i];
            $index = $i;
        }
    }
    return $max . " at index " . $index;
}