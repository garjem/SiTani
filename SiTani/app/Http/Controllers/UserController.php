<?php

namespace App\Http\Controllers;

use AppModels\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        dd($users);
        return  view(["data_user"=>$users]);
    }
}
