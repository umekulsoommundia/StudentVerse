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
            $table->integer('Question_Id');
            $table->foreign("Question_Id")->on("id")->references("question__boxes");
            $table->integer('Answer_Id');
            $table->foreign("Answer_Id")->on("id")->references("answer__boxes");
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
