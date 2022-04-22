<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;

class MyUserController extends Controller
{
    public function index()
    {
        $list = MyUser::orderBy('id','ASC')->paginate(200);
        return view('user_list',compact('list'));
    }
}
