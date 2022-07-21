<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Types of Conditional Statements </title>
</head>

<body>
    <?php

    //IF STATEMENT
    $x = 49;
    if ($x < 50) {
        echo "Conditional Met";
        echo "<hr/>";
    } else {
        echo "Condition Not Met";
    }

    ?>

    <h2> ELSE IF STATEMENT </h2>

    <?php
    $x = 90;
    print_r($x);
    echo "<br>";
    var_dump($x);
    echo "<br>";
    if ($x < 50) {
        echo "F";
    } elseif ($x >= 50 && $x < 60) {
        echo "D";
    } elseif ($x >= 60 && $x < 70) {
        echo "D";
    } elseif ($x >= 70 && $x < 80) {
        echo "B";
    } elseif ($x >= 80 && $x < 90) {
        echo "A";
    } else {
        print("A+");
    }

    ?>

</body>

</html>