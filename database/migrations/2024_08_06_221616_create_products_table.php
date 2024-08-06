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
            $table->string('name');
            $table->foreignId('category_id')->constrained();
            $table->string('image')->nullable();
            $table->string('link_image')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('quantity')->default(0);
            $table->boolean('on_sale')->default(false); // Produto em promoção
            $table->decimal('sale_price', 8, 2)->nullable(); // Preço de venda durante a promoção
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
