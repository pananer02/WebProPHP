<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_POST['submit'])) {
        $array = $_POST['car'];
        echo "<form method='POST'>";
        echo "<table border='1'>";
        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            echo '<td><input type="Text" name="car[]" placeholder="Enter Car Name"></td>';
            echo "</tr>";
        }
        echo "<td><input type='submit' name='submit' value='submit information' ></td>";
        echo "</table>";
        echo "</form>";
        for ($i = 0; $i < 10; $i++) {
            echo $array[$i] . "<br>";
        }
    } else {
        echo "<form method='POST'>";
        echo "<table border='1'>";
        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            echo '<td><input type="Text" name="car[]" placeholder="Enter Car Name"></td>';
            echo "</tr>";
        }
        echo "<td><input type='submit' name='submit' value='submit information' ></td>";
        echo "</table>";
        echo "</form>";
    }
    ?>
</body>

</html>