<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUserController extends Controller
{
    public function index(){
        $users = User::whereRaw(1);
        $users = $users->orderBy('id','DESC')->paginate(12);
        $viewdata = [
          'users' => $users
        ];
        return view('admin.user.index',$viewdata);
    }

}
