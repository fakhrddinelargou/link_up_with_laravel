<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

  public function search(Request $request)
{
    if (!$request->filled('query')) {
        return response()->json([]);
    }

    $users = User::where('name', 'LIKE', "%{$request->query}%")
                 ->limit(5)
                 ->get();

    return response()->json($users);
}

   
}
