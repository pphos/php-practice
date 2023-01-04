<?php

namespace FizzBuzz;


use FizzBuzz\App\OutputInterface;


class ConsoleOutput implements OutputInterface
{
  public function write(string $data): void
  {
    echo $data;
  }
}
