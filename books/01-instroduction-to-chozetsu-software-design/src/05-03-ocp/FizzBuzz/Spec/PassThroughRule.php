<?php

namespace App\FizzBuzz\Spec;

use App\FizzBuzz\Core\ReplaceRuleInterface;

/**
 *  変化条件に該当しない場合のルール
 */
class PassThroughRule implements ReplaceRuleInterface
{
  public function match(string $carry, int $n): bool
  {
    return $carry == "";
  }

  public function apply(string $carry, int $n): string
  {
    return (string)$n;
  }
}