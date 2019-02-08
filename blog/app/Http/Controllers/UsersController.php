<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Rights;
use App\User;


class UsersController extends Controller
{
    public function getUser(){

        $user = User::with('roles.permissions')->findOrFail(Auth::user()->id);
        $isAdmin = Rights::authIs('admin');

        $data = [
            'user' => $user,
            'isAdmin'=> $isAdmin
        ];

        return view('users', $data);
    }
}
