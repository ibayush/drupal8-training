<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class HelloController.
 *
 * @package Drupal\hello_world\Controller
 */
class HelloController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello() {
    $service = \Drupal::service('hello_world.say_hello');
    //print_r($service); die();
    $opt = $service->sayHello();
    //$output = $service->sayHello('Hello Ayush');
    return [
      '#type' => 'markup',
      '#markup' => $opt
    ];
  }

}
