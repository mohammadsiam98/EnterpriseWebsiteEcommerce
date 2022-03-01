<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Auth;
use DB;

class usersController extends Controller
{
    public function show()
    {
        return view('pages.theme.userProfile')->with('user',auth()->user());
    }

    public function edit()
    {
        //
        return view('pages.theme.userDetails')->with('user',auth()->user());
    }


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

    public function destroy($id)
    {
        //
    }
}
