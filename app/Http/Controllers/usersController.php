<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class usersController extends Controller
{
    public function showUsers() {
         $test = 'test';
    return  view('admin.users.index', compact('test'));
    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(Request $request) {
        User::create($request->all());
        return 'succ';
        return $request->all();
    }
}
