<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index(){
        return view('admin.form');
    }

    public function store(){
        return view('admin.form');

    }
}
