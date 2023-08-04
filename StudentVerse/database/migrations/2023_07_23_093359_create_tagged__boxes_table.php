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
        Schema::create('tagged__boxes', function (Blueprint $table) {
            $table->id();
            $table->string('Subject');
            $table->string('Description');
            $table->string('Vote');
            $table->integer('Box_Id');
            $table->foreign("Box_Id")->references("id")->on("question__boxes");

            
            $table->integer('Tags_Id');
            $table->foreign("Tags_Id")->references("id")->on("tag__boxes");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagged__boxes');
    }
};
