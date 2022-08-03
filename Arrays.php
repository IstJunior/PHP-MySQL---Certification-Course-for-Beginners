<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ARRAYS</title>
</head>
<body>
    <?php
    
    $colors = array("blue","green","red");
    echo "My favorite colors are ".$colors[0].", ".$colors[1]." and ".$colors[2]."<hr>";

    echo count($colors);
    
    ?>
</body>
</html>