<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PagesController extends Controller
{
    public function test($name = 'twa'){

        return view('test', [
            'name' => $name,
            'page_title' => 'Page de test'
        ]);
    }

    public function getUsersList(){

        $users = User::paginate(30);

        return view('users_list', [
            'users' => $users
        ]);
    }
}
