<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Objets</title>
</head>
<body>
    <?php

class Person{

    public $firstname;
    public $lastname;
    public $age;

    public function __construct($firstname, $lastname, $age)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->age = $age;

    }

    public function hello(){
        return "I am". $this->firstname." ". $this->lastname." my age is: ".$this->age. " ";

    }
}

    $person1 = new Person('Jhon','Smith', 25);
    $person2 = new Person('Joe','Bob', 35);

    echo $person1->hello();
    echo "<br>";
    echo $person2->hello();
    ?>
</body>
</html>