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
        Schema::create('study__space__boxes', function (Blueprint $table) {
            $table->id();
            $table->string('Topic');
            $table->string('Description');
            $table->string('Image');
            $table->integer('Status');
            $table->unsignedBigInteger('User_Id');
            $table->foreign("User_Id")->references("id")->on("userboxes");

            $table->unsignedBigInteger('Tagged_Id');

            $table->foreign("Tagged_Id")->references("id")->on("tagged__boxes");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study__space__boxes');
    }
};
