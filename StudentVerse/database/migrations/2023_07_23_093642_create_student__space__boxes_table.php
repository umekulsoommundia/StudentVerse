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
            $table->integer('User_Id');
            $table->foreign("User_Id")->on("id")->references("user-boxes");

            $table->integer('Tagged_Id');
            $table->foreign("Tagged_Id")->on("id")->references("tagged__boxes");

            $table->integer('Space_Id');
            $table->foreign("Space_Id")->on("id")->references("study__space__boxes");

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
