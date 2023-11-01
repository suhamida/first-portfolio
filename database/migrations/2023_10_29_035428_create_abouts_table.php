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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('summary')->nullable();
            $table->text('image')->nullable();
            $table->date('bday');
//            $table->string('website')->nullable();
//            $table->integer('phone');
            $table->string('city')->nullable();
            $table->integer('age');
//            $table->string('degree')->nullable();
//            $table->string('email')->nullable();
//            $table->string('availability')->nullable();
//            $table->string('cover')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
