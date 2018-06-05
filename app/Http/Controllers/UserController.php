<?php

namespace App\Http\Controllers;

use App\Http\Requests\DefaultRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registeration(DefaultRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->phone_no = $request->phone_no;
        $user->api_token = str_random(61);
        $result = $user->save();
        if ($result) {
            return response()->json($user, 200);
        }

        return response()->json(['message' => 'Error while register an user'], 400);
    }

    public function login(DefaultRequest $request)
    {
        $credientials = $request->except('email', 'password');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json(Auth::user(), 200);
        }
        return response()->json(['message' => 'user not found '], 404);

    }

    public function loginWeb(DefaultRequest $request)
    {
        $credientials = $request->except('email', 'password');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return view('welcome', Auth::user());
        }
        return view('form', ['message' => 'not logged']);

    }
}
