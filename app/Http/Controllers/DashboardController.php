<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $users = [
            [
                'name' => 'Joice',
                'age' => 22,
            ],
            [
                'name' => 'Ana',
                'age' => 20,
            ]
            ];
    

        return view ('dashboard' , [
            'userList' => $users
        ]);
    }
}
