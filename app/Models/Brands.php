<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\sub_categories;

class Brands extends Model
{
    protected $fillable=['category_id','subCategory_id','brandName','slug','image','status'];
    
    // Category Relationship with brands
    function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    // SubCategory Relationship with brands
    function SubCategory(){
        return $this->belongsTo(sub_categories::class, 'subCategory_id');
    }
    use HasFactory;
}
