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
            $table->id('profile_id');
            $table->string('User_Name');
            $table->string('Image');
            $table->integer('Phone_Number');
            $table->integer('User_Id');
            $table->integer('Badge_Id');
            $table->integer('Mail_Id');
            $table->integer('Interest_Id');
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
