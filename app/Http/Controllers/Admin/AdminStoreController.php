<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminStoreController extends AdminController
{
    public function index(){
        return view('admin.store.index');
    }
    public function create(){
        return view('admin.store.create');
    }
    public function store(){

    }
}
