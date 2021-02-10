<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $score = 101;
    $grade = "";
    if($score > 100){
        echo "<h1>your score no 0-100<br>";
    }
    else if($score >= 80){
        $grade = "A";
    }
    else if ($score >= 70){
        $grade = "B";
    }
    else if ($score >= 60){
        $grade = "C";
    }
    else if ($score >= 50){
        $grade = "D";
    }
    else if($score >= 0 ){
        $grade = "F";
    }
    else{
        $grade = "null";
    }
    echo "<h1>your score is $score <br>";
    echo "Your grade is $grade";
    ?>
</body>
</html>