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
        Schema::create('profile-boxes', function (Blueprint $table) {
            $table->id();
            $table->string('User_Name');
            $table->string('Image');
            
            $table->integer('Phone_Number');
            $table->integer('User_Id');
            $table->foreign("User_Id")->on("id")->references("user-boxes");

            $table->integer('Badge_Id');
            $table->foreign("Badge_Id")->on("id")->references("badge__boxes");

            $table->integer('Mail_Id');
            $table->foreign("Mail_Id")->on("id")->references("mail__boxes");

            $table->integer('Interest_Id');
            $table->foreign("Interest_Id")->on("id")->references("interest__boxes");

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile-boxes');
    }
};
