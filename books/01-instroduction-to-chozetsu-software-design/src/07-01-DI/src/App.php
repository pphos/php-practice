<?php

namespace FizzBuzz;

class App
{
  public static function main(): void
  {
    $factory = new FizzBuzzAppFactory();
    $printer = $factory->create();
    $printer->printRange(1, 100);
  }
}

require_once __DIR__ . '/../vendor/autoload.php';

App::main();