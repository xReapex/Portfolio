<?php

namespace App\Services;

class TokenGenerator
{
    public function createToken($length)
    {
        $token = openssl_random_pseudo_bytes($length);
        $token = bin2hex($token);
        return $token;
    }
}