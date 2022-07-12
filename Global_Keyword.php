<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Global Keywords</title>
</head>
<body>
    <?php

$x = 30;
$y = 20;

function test1(){
    
    global $x, $y;
    $y = $x + $y;
}
test1();
echo $y;
echo $x;

    ?>
</body>
</html>