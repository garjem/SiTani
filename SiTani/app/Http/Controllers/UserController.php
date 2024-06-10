<?php

namespace App\Http\Controllers;

use AppModels\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return  view('user', compact('users'));
    }
}
