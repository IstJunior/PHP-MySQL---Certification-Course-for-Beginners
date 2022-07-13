<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Data Types</title>
</head>
<body>
    <?php

//STRING
$x = "Hello World!";
$y = 'Hello World!';
echo $x;
echo "<br>";
echo $y;
echo "<hr/>";

//INTEGER 
$num = 6000;
var_dump($num);
echo "<hr/>";

//FLOAT 
$num2 = 20.500;
var_dump($num2);
echo "<hr/>";

//ARRAY
$sports = array("Soccer","Tennis","Baseball","Football");
var_dump($sports);
echo "<hr/>";

//NULL
$color = "Blue";
$color = null;
var_dump($color);

//BOOLEAN
$x = true;
$y = false;
var_dump($x);
var_dump($y);

    ?>
</body>
</html>