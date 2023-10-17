<?php

namespace App\Repositories;

class UserRepository
{
    public function __construct(
        UserRepository $users, // circular reference
    )
    {
    }
}
