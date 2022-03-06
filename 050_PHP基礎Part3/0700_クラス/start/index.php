<?php
class Person
{
    public $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello()
    { // publicは省略
        echo 'hello, ' . $this->name;
    }
}

$bob = new Person('Bob', 18);
echo $bob->age . '<br>';
echo $bob->name . '<br>';
$bob->hello();