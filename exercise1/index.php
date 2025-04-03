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

<form method="post" action="action.php" style="width: 300px; display: flex; flex-direction: column; gap: 10px;">
    <label for="array">Array: </label>
    <input type="text" id="array" name="array" required>

    <label for="algorithm">Choose the sorting algorithm: </label>
    <select name="algorithm" id="algorithm">
        <option value="bubble">Bubble Sort</option>
        <option value="select">Selection Sort</option>
        <option value="insert">Insertion Sort</option>
        <option value="php-sort">PHP Sort Function</option>
    </select>

    <button type="submit">Sort</button>
</form>

<div id="result">
    <?php
    if (isset($_GET['sorted_array'])) {
        $sorted_array = $_GET['sorted_array'];

        echo "<p><b>Sorted Array:</b> " . $sorted_array . "</p>";
    }
    ?>
</div>

</body>
</html>