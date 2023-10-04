<?php

use App\Models\Category;
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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class, 'category_id')->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->string('location')->nullable();
            $table->string('apartment_size');
            $table->string('land_area');
            $table->string('no_floors');
            $table->string('apartment_floor');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('launch_date');
            $table->string('collection');

            $table->string('thumbnail');
            $table->string('image');

            $table->string('full_address');
            $table->longText('map_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
