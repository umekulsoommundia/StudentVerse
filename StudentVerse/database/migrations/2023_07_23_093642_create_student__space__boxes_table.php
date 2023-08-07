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
        Schema::create('student__space__boxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('User_Id');

            $table->foreign("User_Id")->references("id")->on("userboxes");


            $table->unsignedBigInteger('Tagged_Id');
            $table->foreign("Tagged_Id")->references("id")->on("tagged__boxes");


            $table->unsignedBigInteger('Space_Id');
            $table->foreign("Space_Id")->references("id")->on("study__space__boxes");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student__space__boxes');
    }
};
