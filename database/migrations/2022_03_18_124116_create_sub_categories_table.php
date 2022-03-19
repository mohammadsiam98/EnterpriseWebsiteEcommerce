<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignid('category_id');
            $table->string('subCategoryName');
            $table->string('slug');
            $table->string('image');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
}
