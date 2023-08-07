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
        Schema::create('mail__boxes', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Description');
            $table->string('Vote');
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
        Schema::dropIfExists('mail__boxes');
    }
};
