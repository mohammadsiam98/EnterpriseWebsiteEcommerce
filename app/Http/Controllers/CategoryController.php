<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
   
    public function list()
    {
        //
        $category_items = Category::all();
        return view('pages.category.list',compact('category_items'));
    }

    public function create()
    {
        //
        return view('pages.category.create');
    }

    public function store(Request $request)
    {
        //

        $this->validate($request,[
            'categoryName' => 'required|min:2|max:30|string',
            'slug' => 'required|min:3|max:100|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        ],[
            'categoryName.required' => 'Please write your Category Name',
            'categoryName.min' => 'Category title should be at least minimum 2 characters',
            'categoryName.max' => 'Category title should be maximum 30 characters',
            'slug.required' => 'Please write your category slug',
            'slug.min' => 'Slug title should be at least minimum 3 characters',
            'slug.max' => 'Slug title should be maximum 20 characters',
            'image.required' => 'Please upload your image'
        ]);
        $category_items = new Category;
        $category_items->categoryName = $request-> categoryName;
        $category_items->slug = $request-> slug;
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $category_items->image ="storage/img/".$image->hashName();
        $category_items->save();
        return redirect()->route('category.create')->with('success','New Details created Successfully');

        
    }

    public function edit($id)
    {
        //
        $category_items = Category::find($id);
        return view('pages.category.edit',compact('category_items'));
    }

    public function update(Request $request, $id)
    {
        //
        $category_items = Category::find($id);
        $category_items->categoryName = $request-> categoryName;
        $category_items->slug = $request-> slug;

        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $category_items->image ="storage/img/".$image->hashName();
        }
        $category_items->save();
        
        return redirect()->route('category.create')->with('success','Category details updated Successfully');
    }

    public function destroy($id)
    {
        //
        $category_items = Category::find($id);
        $category_items->delete();
        return redirect()->route('category.list')->with('success','Category details Deleted Successfully');;
    }
}
