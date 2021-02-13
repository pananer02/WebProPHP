<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> ผลลัพธ์ ตัวอย่าง Control statement ที่12 </title>
</head>

<body>
    <?php
    $row = $_POST['row'];
    $column = $_POST['column'];
    $rowMax = intval($row);
    $colMax = intval($column);

    echo "<table align='center' border='4' width='300'>";
    for ($r = 1; $r <= $rowMax; $r++) {
        echo "<tr>";
        for ($c = 1; $c <= $colMax; $c++) {
            $random = rand(1, 100);
            $check = 0;
            if($random%2 ==0){
                $check = 1;
            }/*
            if ($random == 1){
                $check = 1;
            }
            for ($i = 2; $i <= $random / 2; $i++) {
                if ($random % $i == 0){
                    $check = 1;
                }
            }*/
            if ($check == 1) {
                echo "<td align='center'><font color='blue'>";
                echo $random;
                echo "</font></td>";
            } else {
                echo "<td align='center'><font color='red'>";
                echo $random;
                echo "</font></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";


    ?>
    <a href='ch6-12.php'> Back </a>

</body>

</html>