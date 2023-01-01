<?php

namespace App\FizzBuzz\Core;

interface ReplaceRuleInterface
{
  public function match(string $carry, int $n): bool;
  public function apply(string $carry, int $n): string;
}