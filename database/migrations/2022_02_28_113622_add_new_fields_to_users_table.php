<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToUsersTable extends Migration
{
    
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Adding extra two fields for social media login
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
        });
    }

    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
