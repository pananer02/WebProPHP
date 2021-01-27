<html>
<body>
<?php
function plus($x ,$y){
    $z = $x + $y;
    echo "x + y = ",$z ,"<br>";
}
function minus($x ,$y){
    $z = $x - $y;
    echo "x - y = ",$z ,"<br>";
}
function mul($x ,$y){
    $z = $x * $y;
    echo "x * y = ",$z ,"<br>" ;
}
function div($x ,$y){
    $z = $x / $y;
    echo "x / y = ",$z ,"<br>" ;
}
switch ($_GET["operator"]){
    case("+"):
        plus($_GET["x"],$_GET["y"]);
        break;
    case("-"):
        minus($_GET["x"],$_GET["y"]);
        break;
    case("*"):
        mul($_GET["x"],$_GET["y"]);
        break;
    case("/"):
        div($_GET["x"],$_GET["y"]);
        break;
    default:      
}
?>
</body>
</html>