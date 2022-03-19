<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\sub_categories;
use App\Models\Category;
use App\Models\Brands;


class BrandsController extends Controller
{
    public function list()
    {
        //
        $Brands = Brands::all();
        return view ('pages.brands.list',compact('Brands'));
    }

    public function create()
    {
        //
        $categories = Category::all();
        $subCategories = sub_categories::all();
        return view ('pages.brands.create',compact('categories','subCategories'));
    }

    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'brandName' => 'required|unique:Brands|min:2|max:30|string',
            'slug' => 'required|unique:Brands|min:3|max:100|string',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'category_id' => 'required',
            'subCategory_id' => 'required',


        ],[
            'brandName.required' => 'Please write your Brand Name',
            'brandName.min' => 'Brand Name should be at least minimum 2 characters',
            'brandName.max' => 'Brand Name should be maximum 30 characters',
            'brandName.unique' => 'This name is already inserted in the database. Please answer another name',
            'slug.required' => 'Please write your brand slug',
            'slug.min' => 'Slug title should be at least minimum 3 characters',
            'slug.max' => 'Slug title should be maximum 20 characters',
            'slug.unique' => 'This slug is already inserted in the database. Please answer another slug',
            'category_id.required' => 'Please choose in which category does it belong to',
            'subCategory_id.required' => 'Please choose in which category does it belong to'
        ]);
        $Brands = new Brands;
        $Brands->brandName = $request->brandName;
        $Brands->slug= $request->slug;
        $Brands->category_id = $request->category_id;
        $Brands->subCategory_id = $request->subCategory_id;
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $Brands->image ="storage/img/".$image->hashName();
        $Brands->save();
        return redirect()->route('brands.create')->with('success','New Brand details created successfully');
    }

    public function edit($id)
    {
        //
        $Brands = Brands::find($id);
        $categories = Category::all();
        $subCategories = sub_categories::all();
        return view ('pages.brands.edit',compact('Brands','categories','subCategories'));

    }

    public function update(Request $request, $id)
    {
        //
        $Brands = Brands::find($id);
        $Brands->brandName = $request->brandName;
        $Brands->slug= $request->slug;
        $Brands->category_id = $request->category_id;
        $Brands->subCategory_id = $request->subCategory_id;
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $Brands->image ="storage/img/".$image->hashName();
        }
        $Brands->save();
        return redirect()->route('brands.list')->with('success','Brand details updated Successfully');
    }

    public function destroy($id)
    {
        //
        $subCategories = Brands::find($id);
        $subCategories->delete();
        return redirect()->route('brands.list')->with('success','Brand details deleted Successfully');
    }

    public function BannerStatusActive($id)
    {
        $banner = Brands::where('id',$id)->first();
        $banner->status = 'active';
        $banner->save();
        return redirect()->route('brands.list')->with('success','Brand activated Successfully');

    }

    public function BannerStatusDisable($id)
    {
        $banner = Brands::where('id',$id)->first();
        $banner->status = 'inactive';
        $banner->save();
        return redirect()->route('brands.list')->with('success','Brand De-activated Successfully');

    }
    
}
