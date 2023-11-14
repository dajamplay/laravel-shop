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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();

            $table->string('sale')->nullable();

            $table->string('title')->unique();

            $table->text('content')->nullable();

            $table->string('image')->nullable();

            $table->string('position')->default('left')->nullable();;

            $table->string('link')->default('#')->nullable();;

            $table->string('slider')->default('1');

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
