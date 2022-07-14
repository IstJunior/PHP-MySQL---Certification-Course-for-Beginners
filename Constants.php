<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constant Variables</title>
</head>
<body>
    <?php
//CASE - SENSITIVE
define("WELCOME", "Hello my name is Jhon Smith");

echo WELCOME;
echo "<hr/>";

//CASE - INSESITIVE
define("welcome", "Hello my name is Jhon Smith");
echo welcome;
echo "<hr/>";

define("CAR" ,"volvo");
function mycar(){
    return CAR;

}
echo CAR;

?>
</body>
</html>