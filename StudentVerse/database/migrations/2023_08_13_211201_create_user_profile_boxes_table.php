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
        Schema::create('user_profile_boxes', function (Blueprint $table) {
            $table->id();
            $table->string('User_Name');
            $table->string('Email');
            $table->string('Bio');
            $table->string('Current_work');

            $table->string('Image');
            $table->unsignedBigInteger('User_Id');
            $table->unsignedBigInteger('Badge_Id')->default(0);
            $table->unsignedBigInteger('Mail_Id')->default(0);
            $table->unsignedBigInteger('Interest_Id');
            $table->timestamps();

            $table->foreign('User_Id')->references('id')->on('user_boxes');
            $table->foreign('Badge_Id')->references('id')->on('badge_boxes');
            $table->foreign('Mail_Id')->references('id')->on('mail_boxes');
            $table->foreign('Interest_Id')->references('id')->on('interest_boxes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile_boxes');
    }
};
