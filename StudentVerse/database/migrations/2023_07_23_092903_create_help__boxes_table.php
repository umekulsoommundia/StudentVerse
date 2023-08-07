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
        Schema::create('help__boxes', function (Blueprint $table) {
            $table->id();
            $table->string('Subject');
            $table->string('Description');

             $table->unsignedBigInteger('User_Id');
             $table->primary("User_Id")->references("id")->on("userboxes");
            
             $table->unsignedBigInteger('Tagged_Id');
             $table->primary("Tagged_Id")->references("id")->on("tagged__boxes");


             $table->unsignedBigInteger('Comment_Id');
             $table->primary("Comment_Id")->references("id")->on("comment__boxes");

        

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('help__boxes');
    }
};
