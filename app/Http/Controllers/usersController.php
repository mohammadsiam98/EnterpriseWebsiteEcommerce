<?php

namespace App\Http\Controllers;
use App\Models\usersImage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Auth;
use DB;

class usersController extends Controller
{
    # User's Profile Show
    public function show()
    {
        $users_id = Auth::id();
        $usersImage = usersImage::where('user_id', $users_id)->first();
        return view('pages.theme.userProfile',compact('usersImage'))->with('user',auth()->user());
    }

    # User's Profile Edit
    public function edit()
    {
        //
        $users_id = Auth::id();
        $usersImage = usersImage::where('user_id', $users_id)->first();
        return view('pages.theme.userDetails',compact('usersImage'))->with('user',auth()->user());
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
