<?php

$autoloader = require_once "vendor/autoload.php";

use App\FizzBuzz\Core\NumberConverter;
use App\FizzBuzz\Spec\CyclicNumberRule;
use App\FizzBuzz\Spec\PassThroughRule;

$fizzBuzz = new NumberConverter([
  new CyclicNumberRule(3, "Fizz"),
  new CyclicNumberRule(5, "Buzz"),
  new PassThroughRule(),
]);

echo $fizzBuzz->convert(1) , PHP_EOL;
echo $fizzBuzz->convert(3) , PHP_EOL;
echo $fizzBuzz->convert(5) , PHP_EOL;
echo $fizzBuzz->convert(15) , PHP_EOL;