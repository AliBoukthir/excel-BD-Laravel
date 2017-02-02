<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

class MembersController extends Controller
{

	public function index() {

    $member = new Member();
    
    $data = $member->all(array('*'));

    $test = "ali";

    return  view('members', compact('data'));

	}




     public function store(Request $request) {
        Member::create($request->all());
        return 'succ';
        
    }
}
