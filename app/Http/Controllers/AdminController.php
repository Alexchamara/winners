<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        // $admin=Admin::all();
        return view('admin.index');
    }

    public function create(){

    }

    public function store(){


    }

    public function destroy(){

    }

    // public function update(request $request){
    //     $request->validate[(

    //     )],
    // }
}
