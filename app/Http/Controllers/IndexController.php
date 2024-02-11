<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        auth()->loginUsingId(1);
        return view('index');
    }
}
