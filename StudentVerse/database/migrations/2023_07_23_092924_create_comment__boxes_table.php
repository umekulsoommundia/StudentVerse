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
        Schema::create('comment__boxes', function (Blueprint $table) {
            $table->id();
            $table->string('Description');
            $table->string('Vote');
            $table->unsignedBigInteger('User_Id');
            $table->foreign("User_Id")->references("id")->on("userboxes");

           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment__boxes');
    }
};
