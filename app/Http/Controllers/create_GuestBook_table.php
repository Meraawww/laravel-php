<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class create_GuestBook_table extends Controller
{
    //
    public function mera()
    {
        return view('mera');
    }
    public function form()
    {
        return view('form');
    }
    public function welcome()
    {
        return view('welcome');
    }

    public function master()
    {
        return view('template/master');
    }

    public function index()
    {
        return view('/index');
    }
}
