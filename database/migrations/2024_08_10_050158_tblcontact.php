<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::table('tblcontact', function (Blueprint $table){
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("Message");
        });
    }

    
    public function down(): void
    {
        Schema::table('tblcontact', function (Blueprint $table) {
            Schema::drop('tblcontact');
        });
    }
};
