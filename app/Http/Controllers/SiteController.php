<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view("mp-ecommerce.index");
    }
    public function detalhes(){
        return view("mp-ecommerce.detail");
    }
}
