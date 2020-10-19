<?php

namespace App\Services;

use App\Repository\UserRepository;

class TokenManager
{

    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createToken($length)
    {
        $token = openssl_random_pseudo_bytes($length);
        $token = bin2hex($token);
        return $token;
    }

    public function findToken($token)
    {
        return $this->userRepository->findOneBy([
            'token' => $token
        ]);
    }
}