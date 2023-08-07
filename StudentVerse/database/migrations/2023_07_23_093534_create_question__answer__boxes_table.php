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
        Schema::create('question__answer__boxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Question_Id');
            $table->foreign("Question_Id")->references("id")->on("question__boxes");



            $table->unsignedBigInteger('Answer_Id');
            $table->foreign("Answer_Id")->references("id")->on("answer__boxes");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question__answer__boxes');
    }
};
