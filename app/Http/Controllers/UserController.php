<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function create(): View
    {
      return view('userview.create');     
    }

}
