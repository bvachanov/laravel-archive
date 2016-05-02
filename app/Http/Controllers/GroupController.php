<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Request;
use App\Group;

class GroupController extends Controller
{
    public function createGroup()
    {
        $users= User::all();        
        return view('groups.addGroup');
    }
    
    public function storeGroup()
    {
        $group=Group::create([
            'name'=>Request::input('name'),
        ]);
        
        return view('groups.showGroup', compact('group'));
        
    }
}
