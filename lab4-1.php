<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x = 100;
$y = "200";
$z = '300';
$add = $x + $y;
$sub = $z - $y;
$time = $y * $z;
$divide = $time / $z;
$message = "Hello World";
echo $x; echo "<br />";
echo $y; echo "<br />";
echo $z; echo "<br />";
echo $x, " + ",$y," = ",$add; echo "<br />";
echo $z, " - ",$y," = ",$sub; echo "<br />";
echo $y, " * ",$z," = ",$time; echo "<br />";
echo $time, " / ",$z," = ",$divide; echo "<br />";
echo $message; echo "<br />";
?>
</body>
</html>