<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Echo vs Print</title>
</head>
<body>


<?php

//BASIC OUTPUT USING ECHO  
echo "<h1>Test Header</h1>";
echo "Sample Paragraph 1. <br>";

echo "This", "String ", "has ", "Multiple parameters";   
echo "<hr>";

//OPUTPUT VARIABLES ECHO
$txt1 = "Sample text 1.";
$txt2 = "Soccer";
$x = 20;
$y = 30;

echo "<h2>".$txt1."</h2>";
echo "I like".$txt2."<br>"; 
echo $x + $y;


//BASIC OUTPUT USING ECHO  
print "<h1>Test Header</h1>";
print "Sample Paragraph 1. <br>";
print "<hr/>";

//OPUTPUT VARIABLES PRINT
$txt1 = "Sample text 1.";
$txt2 = "Soccer";
$x = 20;
$y = 30;

print "<h2>". $txt1. "</h2>";
print "<h2> I like". $txt2. "</h2>";
print $x+$y;

?>
</body>
</html>