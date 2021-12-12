<?php

class Person
{
  public $name; //свойства->информация
  public $age;


  public function sayHello() {            //метод->действия
       echo 'Hi I am';
  }
}



$myPerson = new Person;                     //объект

//$myPerson->sayHello();
$myPerson->name = "Rahim";

echo $myPerson->name




?>
