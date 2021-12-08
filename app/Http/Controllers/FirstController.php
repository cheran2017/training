<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class FirstController extends Controller
{
    public function dataReturn(Request $request)
    {

    
        return view('form');
    }

    public function save(Request $request)
    {
        $messages = [
            'name.required' => 'You have to enter this field',
            'name.numeric' => 'You have to enter number only',
        ];
        //rule
        $request->validate([

            'name' => 'required|numeric',
            'password'      => 'required|confirmed'

        ],$messages);
        // return $request;
        
        

    }

    public function view()
    {
        return view('dashboard');
    }
}
