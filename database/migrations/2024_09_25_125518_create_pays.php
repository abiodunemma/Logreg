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
        Schema::create('pays', function (Blueprint $table) {
            $table->id();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
         //   $table->string('userid');
            $table->string('name');
            $table->unsignedBigInteger('userid');
            //foregin key to users table
            $table-> string('Amount');
            $table->string('Card_no');
            $table->string('ED');
            $table->string('cvv');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pays');
    }
};
