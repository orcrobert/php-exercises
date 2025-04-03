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
    <label for="number">Enter and integer: </label>
    <input type="number" id="number" name="number" required>

    <button type="submit">
        Check
    </button>
</form>

<div id="result">
    <?php

    if (isset($_GET['result'])) {
        $result = $_GET['result'];

        echo "The number is ";

        if ($result == "false") {
            echo "not prime";
        }
        else {
            echo "prime";
        }
    }

    ?>
</div>

</body>
</html>