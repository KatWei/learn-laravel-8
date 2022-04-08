<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if(!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => '您的邮箱可能输入有误，请检查后再来'
            ]);
        }
        session()->regenerate();
        return redirect('/')->with('success', '欢迎回来');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', '再见！');
    }
}
