<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MyWorksController extends Controller
{
    public function index() {
        return view('/pages/my_works');
    }
}
