<?php

namespace App\Auth;

use App\Auth\User;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * 次の記事を参照
 * https://stackoverflow.com/questions/50602198/laravel-how-to-authenticate-users-without-db
 * https://stackoverflow.com/questions/33331421/custom-user-authentication-base-on-the-response-of-an-api-call
 * https://readouble.com/laravel/8.x/ja/authentication.html
 * https://github.com/illuminate/auth/blob/master/SessionGuard.php
 * https://reffect.co.jp/laravel/laravel-authentification-by-code-base#attemptLogin
 */

class CustomUserProvider implements UserProvider
{
    /**
     * Retrieve a user by their unique identifier.
     *
     * @param  mixed  $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier)
    {
      return $this->getUserById($identifier);
    }

    /**
     * Retrieve a user by the given credentials.
     *
     * @param  array  $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials)
    {
      return $this->getUserById($credentials['id']);
    }

    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
      return $credentials['id'] === 1;
    }

    /**
     * Retrieve a user by their unique identifier and "remember me" token.
     *
     * @param  mixed  $identifier
     * @param  string  $token
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByToken($identifier, $token){}

    /**
     * Update the "remember me" token for the given user in storage.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  string  $token
     * @return void
     */
    public function updateRememberToken(Authenticatable $user, $token){}

    protected function getUserById(string $id): User
    {
      return new User($id);
    }
}