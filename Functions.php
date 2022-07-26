<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions </title>
</head>

<body>
    <?php
    function displaytxt()
    {
        echo "My firts function";
    }
    displaytxt();
    echo "<hr/>";

    function mycar($car)
    {
        echo $car . "<br>";
    }

    mycar("Volvo");
    mycar("BMW");
    mycar("Honda");
    ?>
    <h2>OTHERS FUNTIONS</h2>
    <?php
    function myAge($minage = 30)
    {
        echo "My age is: " . $minage . "<hr>";
    }
    myAge();
    myAge(50);
    myAge(70);
    myAge(18);

    echo "<hr>";
function add($x, $y){
    $z = $x + $y;
    return $z;
}


echo "1 + 2 = ".add(1,2)."<br>";
echo "2 + 4 = ".add(2,4)."<br>";
echo "5 + 5 = ".add(5,5)."<br>";
    ?>
</body>

</html>