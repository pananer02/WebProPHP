<!DOCTYPE html>
<html lang="en">

<head>
    <title> Form for Calculation </title>
</head>

<body>
    <center>
        <?php
        if (isset($_GET['submit'])) {
            $number1 = $_GET['number1'];
            $number2 = $_GET['number2'];
            $number3 = $_GET['number3'];
            $operator1 = $_GET['operator1'];
            $operator2 = $_GET['operator2'];
            $sum = 0;
            if ($operator1 == "+")
                $sum = $number1 + $number2;
            if ($operator1 == "-")
                $sum = $number1 - $number2;
            if ($operator1 == "*")
                $sum = $number1 * $number2;
            if ($operator1 == "/")
                $sum = $number1 / $number2;
            if ($operator1 == "%")
                $sum = $number1 + $number2;
            if ($operator2 == "+")
                $sum += $number3;
            if ($operator2 == "-")
                $sum -= $number3;
            if ($operator2 == "*")
                $sum *= $number3;
            if ($operator2 == "/")
                $sum /= $number3;
            if ($operator2 == "%")
                $sum %= $number3;
        }
        ?>
        <h1> Arithmatic Operator</h1>

        <form>
            <?php
            if (isset($_GET['submit'])) {
                echo "<h3>Enter Number 1 : <input type=text name=number1 size=15 value=$number1> </h3>";

                if ($operator1 == "+") {
                    echo "<input type=radio name=operator1 value=+ checked > + : ";
                    echo "<input type=radio name=operator1 value=-> - :";
                    echo "<input type=radio name=operator1 value=*> * :";
                    echo "<input type=radio name=operator1 value=/> / :";
                    echo "<input type=radio name=operator1 value=%> % :";
                }
                if ($operator1 == "-"){
                    echo "<input type=radio name=operator1 value=+> + :";
                    echo "<input type=radio name=operator1 value=- checked> - :";
                    echo "<input type=radio name=operator1 value=*> * :";
                    echo "<input type=radio name=operator1 value=/> / :";
                    echo "<input type=radio name=operator1 value=%> % :";
                }
                if ($operator1 == "*"){
                    echo "<input type=radio name=operator1 value=+> + :";
                    echo "<input type=radio name=operator1 value=-> - :";
                    echo "<input type=radio name=operator1 value=* checked> * :";
                    echo "<input type=radio name=operator1 value=/> / :";
                    echo "<input type=radio name=operator1 value=%> % :";
                }
                if ($operator1 == "/"){
                    echo "<input type=radio name=operator1 value=+> + :";
                    echo "<input type=radio name=operator1 value=-> - :";
                    echo "<input type=radio name=operator1 value=*> * :";
                    echo "<input type=radio name=operator1 value=/ checked> / :";
                    echo "<input type=radio name=operator1 value=%> % :";
                }
                if ($operator1 == "%"){
                    echo "<input type=radio name=operator1 value=+> + :";
                    echo "<input type=radio name=operator1 value=-> - :";
                    echo "<input type=radio name=operator1 value=*> * :";
                    echo "<input type=radio name=operator1 value=/> / :";
                    echo "<input type=radio name=operator1 value=% checked> % :";
                }

                echo "<h3>Enter Number 2 : <input type=text name=number2 size=15 value=$number2> </h3>";
                if ($operator2 == "+") {
                    echo "<input type=radio name=operator2 value=+ checked > + : ";
                    echo "<input type=radio name=operator2 value=-> - :";
                    echo "<input type=radio name=operator2 value=*> * :";
                    echo "<input type=radio name=operator2 value=/> / :";
                    echo "<input type=radio name=operator2 value=%> % :";
                }
                if ($operator2 == "-"){
                    echo "<input type=radio name=operator2 value=+> + :";
                    echo "<input type=radio name=operator2 value=- checked> - :";
                    echo "<input type=radio name=operator2 value=*> * :";
                    echo "<input type=radio name=operator2 value=/> / :";
                    echo "<input type=radio name=operator2 value=%> % :";
                }
                if ($operator2 == "*"){
                    echo "<input type=radio name=operator2 value=+> + :";
                    echo "<input type=radio name=operator2 value=-> - :";
                    echo "<input type=radio name=operator2 value=* checked> * :";
                    echo "<input type=radio name=operator2 value=/> / :";
                    echo "<input type=radio name=operator2 value=%> % :";
                }
                if ($operator2 == "/"){
                    echo "<input type=radio name=operator2 value=+> + :";
                    echo "<input type=radio name=operator2 value=-> - :";
                    echo "<input type=radio name=operator2 value=*> * :";
                    echo "<input type=radio name=operator2 value=/ checked> / :";
                    echo "<input type=radio name=operator2 value=%> % :";
                }
                if ($operator2 == "%"){
                    echo "<input type=radio name=operator2 value=+> + :";
                    echo "<input type=radio name=operator2 value=-> - :";
                    echo "<input type=radio name=operator2 value=*> * :";
                    echo "<input type=radio name=operator2 value=/> / :";
                    echo "<input type=radio name=operator2 value=% checked> % :";
                }
                echo "<h3>Enter Number 3 : <input type=text name=number3 size=15 value=$number3> </h3>";
                echo "<br><br>";

                echo "<input type=submit name=submit value=Submit />";

            } else {
                echo "<h3>Enter Number 1 : <input type=text name=number1 size=15 /> </h3>";
                echo "<input type=radio name=operator1 value=+> + :";
                echo "<input type=radio name=operator1 value=-> - :";
                echo "<input type=radio name=operator1 value=*> * :";
                echo "<input type=radio name=operator1 value=/> / :";
                echo "<input type=radio name=operator1 value=%> % :";

                echo "<h3>Enter Number 2 : <input type=text name=number2 size=15 /> </h3>";
                echo "<input type=radio name=operator2 value=+> + :";
                echo "<input type=radio name=operator2 value=-> - :";
                echo "<input type=radio name=operator2 value=*> * :";
                echo "<input type=radio name=operator2 value=/> / :";
                echo "<input type=radio name=operator2 value=%> % :";

                echo "<h3>Enter Number 3 : <input type=text name=number3 size=15 /> </h3>";
                echo "<br><br>";

                echo "<input type=submit name=submit value=Submit />";
            }
            ?>
        </form>

        <br>
        <?php
        if (isset($_GET['submit'])) {
            echo "Sum of Number = ", ($sum);
        }
        ?>
    </center>
</body>
</html>