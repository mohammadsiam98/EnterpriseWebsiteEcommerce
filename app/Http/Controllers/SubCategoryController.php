<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\sub_categories;
use App\Models\Category;
class SubCategoryController extends Controller
{
    public function list()
    {
        //
        $subCategories = sub_categories::all();
        return view ('pages.subcategories.list',compact('subCategories'));
    }

    public function create()
    {
        //
        $categories = Category::all();
        return view ('pages.subcategories.create',compact('categories'));
    }

    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'subCategoryName' => 'required|unique:sub_categories|min:2|max:30|string',
            'slug' => 'required|unique:sub_categories|min:3|max:100|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'category_id' => 'required'

        ],[
            'subCategoryName.required' => 'Please write your Category Name',
            'subCategoryName.min' => 'Sub Category title should be at least minimum 2 characters',
            'subCategoryName.max' => 'Sub Category title should be maximum 30 characters',
            'subCategoryName.unique' => 'This name is already inserted in the database. Please answer another name',
            'slug.required' => 'Please write your category slug',
            'slug.min' => 'Slug title should be at least minimum 3 characters',
            'slug.max' => 'Slug title should be maximum 20 characters',
            'slug.unique' => 'This slug is already inserted in the database. Please answer another slug',
            'image.required' => 'Please upload your image',
            'category_id.required' => 'Please choose in which category does it belong to'
        ]);
        $subCategories = new sub_categories;
        $subCategories->subCategoryName = $request->subCategoryName;
        $subCategories->slug= $request->slug;
        $subCategories->category_id = $request->category_id;
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $subCategories->image ="storage/img/".$image->hashName();
        $subCategories->save();
        return redirect()->route('subCategories.create')->with('success','New Sub Category & details created Successfully');

    }

    public function edit($id)
    {
        //
        $subCategories = sub_categories::find($id);
        $categories = Category::all();
        return view('pages.subcategories.edit',compact('subCategories','categories'));
    }

    public function update(Request $request, $id)
    {
        //
        $subCategories = sub_categories::find($id);
        $subCategories->subCategoryName = $request->subCategoryName;
        $subCategories->slug= $request->slug;
        $subCategories->category_id = $request->category_id;
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $subCategories->image ="storage/img/".$image->hashName();
        }
        $subCategories->save();
        return redirect()->route('subCategories.list')->with('success','New Sub Category & details updated Successfully');
    }

    public function destroy($id)
    {
        //
        $subCategories = sub_categories::find($id);
        $subCategories->delete();
        return back();
    }
}
