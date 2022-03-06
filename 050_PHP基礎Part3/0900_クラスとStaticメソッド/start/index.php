<?php

/**
 * クラス内のthis
 */
class Person
{
    private $name;
    public $age;
    public static $whereTolive = 'earth';
    public const whyNot = 'woo';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        echo static::bye() . '<br>';
        echo static::$whereTolive . '<br>';
        echo static::whyNot . '<br>';
        return $this;
    }

    static function bye() {
        echo 'bye';
    }
}

$bob = new Person('Bob', 18);
$bob->hello();
Person::bye(); // staticメソットは基本的にクラス名を用いて実行される
echo Person::$whereTolive;
echo Person::whyNot;
// $bob->hello()->bye();

// $tim = new Person('Tim', 32);
// $tim->hello();