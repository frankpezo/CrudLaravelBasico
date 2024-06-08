<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function create(): View
    {
      return view('userview.create');     
    }

    public function register(UserRequest $request):RedirectResponse
    {
        $users = new User();
        $users->nombre = $request->nombre;
        $users->apellido = $request->apellido;
        $users->edad = $request->edad;
        $users->dni = $request->dni;;
        $users->estadocivil = $request->estadocivil;
        $users->save();

        return redirect()->route('user.create')->with('success', 'Se registró con éxito');
    }

}
