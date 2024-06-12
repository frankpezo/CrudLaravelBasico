<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\JsonResponse;

class UserApiController extends Controller
{
    //
    public function index(): JsonResponse
    {
        $users = User::all();

        return response()->json($users, 200);
    }

    public function store(UserRequest $request): JsonResponse
    {
      $users = User::create($request->all());

      return response()->json([
        'success'=> true, 
        'data'=> $users, 
      ], 201);
    }

    public function show($id): JsonResponse
    {
        $users = User::find($id);

        if($users){
            return response()->json([
                'success'=> true, 
                 'data'=> $users
            ], 200);
        }else{
            return response()->json([
                'success'=>false, 
                'message'=> 'Usuario no encontrado'
            ], 404);
        }
    }
    
}
