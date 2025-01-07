<?php

// 생성자 : construct는 클래스를 이요하여 객체를 생성 시 사용한다.


class Fruit
{
    private $fruit_name;
    private $price;
    private $color;

    function __construct($fruit_name, $price, $color)
    {
        $this->fruit_name = $fruit_name;
        $this->price = $price;
        $this->color = $color;

    }

    function print_fruit(){
        print($this->fruit_name." / ".$this->color." / ".$this->price." / ");
    }
}

$apple = new Fruit('asdf',444,123);
$apple->print_fruit();

?>
