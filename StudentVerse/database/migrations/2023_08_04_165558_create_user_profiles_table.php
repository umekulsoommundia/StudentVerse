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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('User_Name');
            
            $table->string('Image');
            
            $table->integer('User_Id');
            $table->foreign('User_Id')->references('id')->on('userboxes');

            $table->integer('Badge_Id');
            $table->foreign('Badge_Id')->references('id')->on('badge__boxes');

            $table->integer('Mail_Id');
            $table->foreign('Mail_Id')->references('id')->on('mail__boxes');

            $table->integer('Interest_Id');
            $table->foreign('Interest_Id')->references('id')->on('interest__boxes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles');
    }
};
