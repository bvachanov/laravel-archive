<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Request;

class GroupController extends Controller
{
    public function createGroup()
    {
        $users= User::all();
        var_dump($users);
        return view('groups.addGroup');
    }
    
    public function storeGroup()
    {
        dd(Request::all());
    }
}
