<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('answer__boxes', function (Blueprint $table) {
            $table->id();
          
            $table->string('Description');
            $table->integer('Status');
            $table->integer('User_Id');
            $table->foreign("User_Id")->references("id")->on("userboxes");


            $table->integer('Comment_Id');
            $table->foreign("Comment_Id")->references("id")->on("comment__boxes");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer__boxes');
    }
};
