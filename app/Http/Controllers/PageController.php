<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Login(Request $request)
    {
        return view("auth.login");
    }

    public function Daftar(Request $request)
    {
        return view("auth.daftar");
    }

    public function Regis(Request $request)
    {
        return view("auth.regis");
    }

    public function Home(Request $request)
    {
        return view("app.index");
    }
}
