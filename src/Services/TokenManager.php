<?php

namespace App\Services;

class TokenManager
{
    public function createToken($length)
    {
        $token = openssl_random_pseudo_bytes($length);
        $token = bin2hex($token);
        return $token;
    }
}