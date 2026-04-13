<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index() {
        //Lấy toàn bộ danh sách người dùng trong bảng users.
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    public function detail($id) {
        $user = User::find($id);
        return view('admin.users.detail');
    }

    public function create() {
        return view('admin.users.create');
    }

    public function edit() {
        return view('admin.users.edit');
    }

    public function update(){
        
    }

    public function store(){

    }

    public function delete(){
        
    }
}
