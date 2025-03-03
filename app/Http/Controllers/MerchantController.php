<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function index(){

    }

    public function store(){
        return view('admin.form');

    }
}
