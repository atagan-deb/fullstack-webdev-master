<?php

/**
 * クラス継承
 */
abstract class Person
{
    private $name;
    public $age;
    public static $WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo self::$WHERE;
        echo static::$WHERE;
    }

    abstract function hello();

    function bye()
    {
        echo 'bye';
    }
    function address()
    {
        echo '私は日本に住んでいます。';
    }
}
class Japanese extends Person
{
    private $name;
    public $age;
    public static $WHERE = '日本';

    function __construct($name, $age)
    {
        parent::__construct($name, $age);
        // $this->name = $name;
        // $this->age = 30;
    }

    function hello()
    {
        echo 'こんにちは、' . $this->name;
        echo '<br>';
        return $this;
    }

    function bye()
    {
        echo 'bye';
    }
    function address()
    {
        echo '私は'. parent::$WHERE .'に住んでいます。';
        echo '<br>';
    }
}


// $bob = new Person('Bob', 18);
// $bob->hello();
$taro = new Japanese('太郎', 22);
$taro->hello();
$taro->address();