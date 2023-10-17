<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;

class UserController extends Controller
{
    public function __construct(
        protected UserRepository $users, // see https://laravel.com/docs/10.x/container
    )
    {
    }

    public function index(): string
    {
        return 'index';
    }
}
