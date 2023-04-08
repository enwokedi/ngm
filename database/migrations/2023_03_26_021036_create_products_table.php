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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('generic_name')->nullable();
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->string('image_name')->nullable();
            $table->string('image_url')->nullable();
            $table->string('receive_date')->nullable();
            $table->string('exp_date')->nullable();
            $table->double('orginal_price')->nullable();
            $table->double('sell_price')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('quantity_left')->nullable();
            $table->double('total')->nullable();
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
