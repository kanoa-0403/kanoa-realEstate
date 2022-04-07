<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use App\Services\UserService;

class UsersController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function input()
    {
        return view('users.input');
    }

    public function confirm(RegisterFormRequest $request)
    {
        $data = $request->all();
        $request->session()->put("user_form", $data);
        return view('users.confirm', [
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->session()->get("user_form");
        User::create($data);
        // $userRecord = $this->userService->store($data);
        return redirect("/register/complete");
    }

    public function complete(Request $request)
    {
        $data = $request->session()->get("user_form");
        echo 'ユーザーの登録が完了しました。';
    }
}
