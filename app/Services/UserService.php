<?php
namespace App\services;

use DB;
use App\Models\User;
use App\Repositories\UserRepository;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store($data)
    {
        var_dump($data);
        DB::beginTransaction();

        try {
            $userData = $this->userRepository->store($data);
            DB::commit();
            return $userData;
        } catch (\Exception $e) {
            DB::rollBack();
            abort(500, $e->getMessage());
        }
    }
}