<?php
/**
* @file providing the service that say hello world and hello 'given name'.
*
*/
namespace  Drupal\hello_world;
class HelloServices2 {
 protected $say_something;
 public function __construct() {
<<<<<<< HEAD
   $this->say_something = 'Hello World jinah';
=======
   $this->say_something = 'Hello World jinah!';
>>>>>>> d6c2fabc12a13528e679d0041f77ac7ea75ce22e
 }
 public function  sayHello($name = ''){
   if (empty($name)) {
     return $this->say_something;
   }
   else {
     return "Hello " . $name . "!";
   }
 }
}
