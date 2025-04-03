<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = $_POST['text'];
    $chars = $_POST['chars'];
    $result = "";

    for ($i = 0; $i < strlen($text); $i++) {
        $pos = strpos($chars, $text[$i]);

        if ($pos === false) {
            $result = $result . $text[$i];
        }
    }

    header("Location: index.php?result=$result");
}
else {
    header("Location: index.php");
}
exit();