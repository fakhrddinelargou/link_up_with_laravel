<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){


    $user = [
        ['id'=> '1' , 'name'=> 'adam' , 'age'=> '19'],
        ['id'=> '2' , 'name'=> 'nowfel' , 'age'=> '32'],
        ['id'=> '3' , 'name'=> 'salma' , 'age'=> '59'],
    ];

        return view('dashboard' , [
    'users' => $user
        ]);
    }
}
