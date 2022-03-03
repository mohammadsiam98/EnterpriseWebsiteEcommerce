<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\usersImage;
use Auth;
class usersImageController extends Controller
{
    public function list()
    {
        //
        $users_id = Auth::id();
        $usersImage = usersImage::where('user_id', $users_id)->first();
        $checkThatImageExistsOrNot = usersImage::first();
        return view ('pages.theme.users_image.list',compact('usersImage','checkThatImageExistsOrNot'));
    }
    
    public function create()
    {
        //
        $users_id = Auth::id();
        $usersImage = usersImage::where('user_id',$users_id)->first();
        $checkThatImageExistsOrNot = usersImage::first();
        return view('pages.theme.users_image.create',compact('usersImage','checkThatImageExistsOrNot'));
    }

    public function store(Request $request)
    {
        //
        $user_id = Auth::id();
        $usersImage = new usersImage;
        $usersImage->user_id = $user_id;

       
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $usersImage->image ="storage/img/".$image->hashName();
        $usersImage->save();
        return redirect()->route('usersImage.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $users_id = Auth::id();
        $usersImage = usersImage::find($id);
        $checkThatImageExistsOrNot = usersImage::first();
        return view('pages.theme.users_image.edit',compact('usersImage','checkThatImageExistsOrNot'));
    }

    public function update(Request $request, $id)
    {
        //
        $users_id = Auth::id();
        $usersImage = usersImage::find($id);
        $usersImage->user_id = $users_id;
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $usersImage->image ="storage/img/".$image->hashName();
        }


        $usersImage->save();
        return redirect()->route('usersImage.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $usersImage = usersImage::where('id', $id)->first();
        $usersImage->delete();
        return redirect()->route('usersImage.list')->with('success',"Deleted Successfully");
    }
}
