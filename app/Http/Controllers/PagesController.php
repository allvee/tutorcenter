<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function signin(){
        return view('pages.signin');
    }

    public function signup(){
        return view('pages.signup');
    }
    public function favor(){
        return view('pages.favor');
    }
}
