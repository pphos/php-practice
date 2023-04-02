<?php

namespace App\Auth;

use Illuminate\Contracts\Auth\Authenticatable;

class User implements Authenticatable
{
    use NoRememberTokenAuthenticatable;

    private string $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }
}