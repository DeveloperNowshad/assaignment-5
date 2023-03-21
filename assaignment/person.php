<?php
class Person {
private $name;
private $email;

public function setName($name){
      $this->name =$name;
}
public function setEmail($email){
      $this->email =$email;
}
public function getName(){
    return $this->name;
}
public function getEmail (){
   return $this->email;
}
 };
 
 $obj = new Person();
 $obj->setName('Hasin Hayder');
 $obj->setEmail('hasinhayder@gmial.com');

 echo "Name: ". $obj->getName() . "<br/>";
 echo "Email: ". $obj->getEmail() . "<br/>";
