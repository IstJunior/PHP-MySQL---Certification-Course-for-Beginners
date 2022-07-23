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
        function displaytxt(){
            echo "My firts function";
        }
        displaytxt();
        echo "<hr/>";

        function mycar($car){
            echo $car."<br>";
        }

        mycar("Volvo");
        mycar("BMW");
        mycar("Honda");
    ?>
</body>
</html>