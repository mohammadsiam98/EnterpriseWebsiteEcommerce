<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Banner;
use Auth;
use SweetAlert;

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
        $this->validate($request,[
            'title' => 'required|min:3|max:100|string',
            'slug' => 'required|min:3|max:100|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        ],[
            'title.required' => 'Please write your slider header',
            'title.min' => 'Slider title should be at least minimum 3 characters',
            'title.max' => 'Slider title should be maximum 100 characters',
            'slug.required' => 'Please write your slider slug',
            'slug.min' => 'Slug title should be at least minimum 3 characters',
            'slug.max' => 'Slug title should be maximum 20 characters',

            'image.required' => 'Please upload your image'
        ]);

        $banner = new Banner;
        $banner->title = $request->title;
        $banner->slug = $request->slug;
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $banner->image ="storage/img/".$image->hashName();
        $banner->save();
        return redirect()->route('banner.create')->with('success','Sliders details inserted Successfully');

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

    public function BannerStatusActive($id)
    {
        $banner = Banner::where('id',$id)->first();
        $banner->status = 'active';
        $banner->save();
        return redirect()->route('banner.list')->with('success','Banner activated Successfully');

    }

    public function BannerStatusDisable($id)
    {
        $banner = Banner::where('id',$id)->first();
        $banner->status = 'inactive';
        $banner->save();
        return redirect()->route('banner.list')->with('success','Banner De-activated Successfully');

    }
}
