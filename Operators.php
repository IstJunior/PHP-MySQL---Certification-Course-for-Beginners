<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators</title>
</head>

<body>
    <?php
    $x = 50;
    $y = 20;

    //ADITION
    echo $x + $y;
    echo "<hr/>";

    //SUBSTRACTION
    echo $x - $y;
    echo "<hr/>";

    //MULTIPLICATION
    echo $x * $y;
    echo "<hr/>";

    //DIVISION
    echo $x / $y;
    echo "<hr/>";

    //MODULUS
    echo $x % $y;
    echo "<hr/>";

    ?>
    <h2>PHP Assignment Operator</h2>
    <?php
    $x = 20;
    echo $x;
    echo "<hr/>";
    ?>
    <h2>Comparison Operators</h2>

    <?php
    $x = 300;
    $y = "300";
    var_dump($x == $y);
    echo "<br>";


    $x = 300;
    $y = "300";
    var_dump($x === $y);
    echo "<br>";


    $x = 300;
    $y = "300";
    var_dump($x != $y);
    echo "<br>";

    $x = 300;
    $y = "300";
    var_dump($x <> $y);
    echo "<br>";

    $x = 300;
    $y = "300";
    var_dump($x !== $y);
    echo "<br>";

    $x = 300;
    $y = "300";
    var_dump($x > $y);
    echo "<br>";

    $x = 300;
    $y = "300";
    var_dump($x < $y);
    echo "<br>";

    $x = 300;
    $y = "300";
    var_dump($x > $y);
    echo "<br>";

    $x = 300;
    $y = "300";
    var_dump($x >= $y);
    echo "<br>";

    $x = 300;
    $y = "300";
    var_dump($x <= $y);
    echo "<hr>";

    ?>
    <h2>Incremet/Decrement Operators</h2>
    <?php
    $x = 50;
    echo ++$x;
    echo "<br>";

    $x = 50;
    echo $x++;
    echo "<br>";

    $x = 50;
    echo --$x;
    echo "<br>";

    $x = 50;
    echo $x--;
    echo "<hr/>";
    ?>
    <h2>Logical Operators</h2>
    <?php
    $x = 200;
    $y = 300;

    if ($x == 200 and $y == 300) {
        echo "True";
        echo "<hr/>";
    }

    if ($x == 200 or $y == 90) {
        echo "True";
        echo "<hr/>";
    }
    if ($x == 200 && $y == 90) {
        echo "True";
        echo "<hr/>";
    }
    if ($x == 200 || $y == 90) {
        echo "True";
        echo "<hr/>";
    }
    
    $x = 200;
    $y = 300;
    if ($x !== 100) {
        echo "True";
        echo "<hr/>";
    }
    ?>
<h2>PHP String Operators</h2>
<?php
$x = "Hello";
$y = "World";
echo $x . $y;
echo "<hr/>";

$x = "Jhon";
$y = "Smith";
$x .= $y;
echo $x;
echo "<hr/>"
?>
<h2>Array Operators</h2>
<?php
$x = array("a" => "blue", "b" => "red");
$y = array("c" => "pink", "d" => "Brown");

print_r($x + $y);
echo "<hr/>";
?>
</body>

</html>