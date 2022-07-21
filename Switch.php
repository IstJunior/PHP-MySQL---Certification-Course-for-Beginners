<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Switch Statement</title>
</head>
<body>
    
    <form action="" method="post">
        <input name="car" type="text">
    </form>
    <?php
        $car = $_POST['car'];
        switch($car){
            case "volvo":
                echo "You Driven a VOLVO";
                break;
            case "bmw":
                echo "You driven a BMW";
                break;
            case "honda":
                echo "You driven a Honda";
                break;
            default:
                echo "You don't drive";
        }
    ?>
</body>
</html>