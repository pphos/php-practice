<?php

namespace FizzBuzz\App;

interface OutputInterface
{
  public function write(string $data): void;
}