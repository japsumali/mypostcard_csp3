<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use App\Article;

class UserController extends Controller
{
    function showUsers(){
    	$users = User::orderBy('id', 'desc')->paginate(2);
    	return view('admin.users_list', compact('users'));
    }

}
