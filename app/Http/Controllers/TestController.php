<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CustomAuthController as CustomAuthController;

class TestController extends CustomAuthController
{
    public function index(){
        dd("asdas");
    }
}
