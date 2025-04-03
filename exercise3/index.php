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
    <label for="text">Text: </label>
    <input type="text" id="text" name="text">

    <label for="chars">Chars: </label>
    <input type="text" id="chars" name="chars">

    <button type="submit">Delete</button>
</form>

<div id="result">
    <?php

    if (isset($_GET['result'])) {
        $result = $_GET['result'];

        echo "The text without the specified chars is: ";
        echo "<br>";
        echo $result;
    }

    ?>
</div>

</body>
</html>