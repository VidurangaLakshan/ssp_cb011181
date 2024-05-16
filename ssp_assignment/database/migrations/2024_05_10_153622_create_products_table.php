<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->string('image');

            $table->string('image2')->nullable();

            $table->string('image3')->nullable();

            $table->string('image4')->nullable();

            $table->string('description');

            $table->string('price');

            $table->string('stock');

            $table->string('status')->nullable();

            $table->string('slug');

            $table->foreignIdFor(\App\Models\Category::class)->constrained('categories')->cascadeOnDelete();

            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
