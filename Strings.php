<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strings</title>
</head>

<body>
    <?php
    //WORD COUNT
    echo str_word_count("Hello World!");
    echo "<hr>";
    //REVERSE WORDS
    echo strrev("Hello World!");
    echo "<hr/>";
    //SEARCH FOR TEXT INSIDE A STRING
    echo strpos("Hello World", "World");
    echo "<hr/>";

    //REPLACE TEXT INSIDE A STRING
    echo str_replace("World", "Jhon", "Hello Dolly");
    ?>
</body>

</html>