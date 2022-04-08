<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:255'
        ],[
            'name.required' => '名称必须填写',
            'username.required' => '昵称必须填写'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', '您已经成功注册');
    }
}
