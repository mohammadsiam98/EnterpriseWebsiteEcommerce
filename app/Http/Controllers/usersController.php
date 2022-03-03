<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Auth;
use DB;

class usersController extends Controller
{
    # User's Profile Show
    public function show()
    {
        return view('pages.theme.userProfile')->with('user',auth()->user());
    }

    # User's Profile Edit
    public function edit()
    {
        //
        return view('pages.theme.userDetails')->with('user',auth()->user());
    }

    # User's Profile Update
    public function update(Request $request)
    {
        //
        $user = auth()->user();
        $user->name = $request->name;
        $user->email= $request->email;
        $user->address = $request->address;       
        $user->telephone = $request->telephone;        
        $user->save();
        return back();
    }
}
