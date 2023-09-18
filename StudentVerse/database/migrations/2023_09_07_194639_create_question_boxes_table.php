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
        Schema::create('question_boxes', function (Blueprint $table) {
            $table->id();
            $table->string('Subject');
            $table->string('Description');
            $table->string('Image');
            $table->unsignedBigInteger('User_Id');
            $table->foreign('User_Id')->references('id')->on('user_boxes');
            $table->unsignedBigInteger('Tagged_Id')->default(0);
            $table->foreign('Tagged_Id')->references('id')->on('tag_boxes');
            $table->boolean('Is_Anonymous')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_boxes');
    }
};
