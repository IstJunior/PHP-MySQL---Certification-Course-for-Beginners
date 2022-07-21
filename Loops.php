<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP While Loops</title>
</head>
<body>
    <h2>WHILE LOOP</h2>
    <?php
    $x = 1;
    //WHILE LOOP
    while($x < 10){
        echo "The number is: ".$x."<br>";
        $x++;        
    }
    echo "<hr/>";
    ?>
    <h2>DO WHILE LOOP</h2>
    <?php
        $x = 1;
        do{
            echo "The number is: ". $x."<br>";
            $x++;
        }while($x < 10);
    ?>
</body>
</html>