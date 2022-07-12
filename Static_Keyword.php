<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Static Keyword</title>
</head>
<body>
    
    <?php 
    
        function test1(){
            static $x = 10;
            echo $x;
            $x++;
        }
            test1();
            echo "<br/>";
            test1();
            echo "<br/>";
            test1();
            echo "<br/>";
            test1();
            echo "<br/>";
            test1();
            
        
    
    ?>

</body>
</html>