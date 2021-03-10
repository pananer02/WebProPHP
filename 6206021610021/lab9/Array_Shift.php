<?php
//ลบแล้วก็เลื่อน ต าแหน่งอาร์เรย์
$a = array("Beer", "Bom", "Wat");
while (count($a)) {
    $value = array_shift($a);
    echo "ลบ" . $value . "<br>\n";
    echo "มีสมาชิกทั้งหมด" . count($a) . " ค่า อยู่ในอาร์เรย์ \$a<br>\n";
    print_r($a);
    echo "<br>";

    //ลบอาร์เรย์
    $a = array("Beer", "Bom", "Wat");
    $b = array("name" => "Bom", "age" => 23, "position" => "sale");
    unset($a[2]); // ลบต าแหน่งที่ 3
    foreach ($a as $value) {
        echo $value . "<br>\n";
    }
    echo "<br>\n";
    unset($b["name"]); // ลบ key= "name"
    echo "มีสมาชิก ทั้งหมด" . count($b) . "ตัวในอาเรย์\$b <br>\n";
    foreach ($b as $key => $value) {
        echo "$key=$value<br>\n";
    }
}
