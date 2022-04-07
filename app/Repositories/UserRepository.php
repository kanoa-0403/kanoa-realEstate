<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function store($data)
    {
        return User::create($data);
    }
}