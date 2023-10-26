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
        Schema::create('our_concerns', function (Blueprint $table) {
            $table->id();
            $table->string("concern_name");
            $table->string('short_name');
            $table->string("slug");
            $table->string('link');
            $table->string('image');
            $table->text('address');
            $table->string('phone');
            $table->string('email');
            $table->longText('about');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_concerns');
    }
};
