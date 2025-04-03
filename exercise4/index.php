<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="action.php" method="post">
    <label for="n">Number of Fibonacci elements: </label>
    <input type="number" name="n" id="n">

    <button type="submit">Generate</button>
</form>

<div id="result">
    <?php

    if (isset($_GET['fiboArray'])) {
        $fiboArray = $_GET["fiboArray"];

        echo $fiboArray;
    }

    ?>
</div>

</body>
</html>