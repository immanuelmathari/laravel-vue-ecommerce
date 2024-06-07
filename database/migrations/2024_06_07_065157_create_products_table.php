<?php

use App\Models\User;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 2000);
            $table->string('slug', 2000);
            $table->string('image', 2000)->nullable();
            $table->integer('image_mine')->nullable();
            $table->longText('description')->nullable();
            $table->decimal('price', 10,2);
            $table->foreignId(User::class, 'created_by')->nullable();
            $table->foreginId(User::class, 'updated_by')->nullable();
            $table->softDeletes(); // adds
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};