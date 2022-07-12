<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Scope</title>
</head>
<body>
<?php

    $x = 5;

    function test1(){
        $x = 5;
        echo "<p>Value of x is: <p/><hr/>".$x;
        
    }
    test1();
    echo "<p>Value of x is: <p/><hr/>".$x;

    function test2(){
        $y = 5;
        echo "<p>Value of x is:<p/><hr/>".$y;
    }
    test2();
    $y = 5;
    echo "<p>Value of x is:<p/><hr/>".$y;
?>    
</body>
</html>


