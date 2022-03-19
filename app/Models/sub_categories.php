<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class sub_categories extends Model
{
    protected $fillable=['category_id','subCategoryName','slug','image'];
    function category(){
        return $this->belongsTo(Category::class, 'category_id');
      }
    use HasFactory;
}
