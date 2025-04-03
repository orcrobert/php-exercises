<?php

$sortedArray = array();

function bubbleSort($array) {
    $n = count($array);
    $sorted = false;

    while ($sorted === false) {
        $sorted = true;

        for ($i = 0; $i < $n - 1; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                $sorted = false;
                $temp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $temp;
            }
        }
    }

    return $array;
}

function selectionSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $min_index = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$min_index]) {
                $min_index = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min_index];
        $arr[$min_index] = $temp;
    }
    return $arr;
}

function insertionSort($arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

function phpSort($arr) {
    sort($arr);
    return $arr;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array = explode(",", $_POST["array"]);
    $algorithm = $_POST["algorithm"];

    for ($i = 0; $i < count($array); $i++) {
        $array[$i] = (int) trim($array[$i]);
    }

    switch ($algorithm) {
        case "bubble":
            $sortedArray = bubbleSort($array);
            break;
        case "select":
            $sortedArray = selectionSort($array);
            break;
        case "insert":
            $sortedArray = insertionSort($array);
            break;
        case "php-sort":
            $sortedArray = phpSort($array);
            break;
        default:
            break;
    }

    $sortedArrayString = implode(", ", $sortedArray);
    header("Location: index.php?sorted_array=" . $sortedArrayString);
}
else {
    header("Location: index.php");
}
exit();