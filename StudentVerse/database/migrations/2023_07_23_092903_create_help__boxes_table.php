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
        Schema::create('help__boxes', function (Blueprint $table) {
            $table->id();
            $table->string('Subject');
            $table->string('Description');
            
            $table->integer('User_Id');
            $table->foreign("User_Id")->on("id")->references("user-boxes");
            
            $table->integer('Tagged_Id');
            $table->foreign("Tagged_Id")->on("id")->references("tagged__boxes");

            $table->integer('Comment_Id');
            $table->foreign("Comment_Id")->on("id")->references("comment__boxes");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('help__boxes');
    }
};
