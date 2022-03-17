<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function list()
    {
        //
        $banner = Banner::all();
        return view ('pages.banner.list',compact('banner'));
    }

    public function create()
    {
        //
        return view('pages.banner.create');

    }

    public function store(Request $request)
    {

        $banner = new Banner;
        $banner->title = $request->title;
        $banner->slug = $request->slug;
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $banner->image ="storage/img/".$image->hashName();
        $banner->save();
        return redirect()->route('banner.create')->with('success','New Details created Successfully');

    }

    public function edit($id)
    {
        //
        $banner = Banner::find($id);
        return view('pages.banner.edit',compact('banner'));
    }

    public function update(Request $request, $id)
    {
        //
        $banner = Banner::find($id);
        $banner->title = $request->title;
        $banner->slug = $request->slug;

        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $banner->image ="storage/img/".$image->hashName();
        }
        $banner->save();
        
        return redirect()->route('banner.create')->with('success','Sliders details updated Successfully');
    }

    public function destroy($id)
    {
        //
        $banner = Banner::find($id);
        $banner->delete();
        return back();
    }
}
