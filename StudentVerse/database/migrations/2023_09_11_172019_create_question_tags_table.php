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
    {Schema::create('question_tags', function (Blueprint $table) {
        $table->id();
      
        $table->unsignedBigInteger('question_id');
        $table->foreign('question_id')->references('id')->on('question_boxes');

        $table->unsignedBigInteger('tag_id')->default(0);
        $table->foreign('tag_id')->references('id')->on('tag_boxes');


        $table->timestamps();

    });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_tags');
    }
};
