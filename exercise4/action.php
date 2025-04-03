<?php

function fibo($n) {
    if ($n == 0) return [];
    if ($n == 1) return [1];
    if ($n == 2) return [1, 1];

    $arr = [1, 1];
    for ($i = 2; $i < $n; $i++) {
        $arr[] = $arr[$i - 1] + $arr[$i - 2];
    }

    return $arr;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["n"];
    $fiboArray = fibo($n);
    $fiboArrayString = implode(", ", $fiboArray);

    header("Location: index.php?fiboArray=$fiboArrayString");
}
else {
    header("Location: index.php");
}
exit();