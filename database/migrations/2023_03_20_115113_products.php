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
        //
        Schema::create('products', function (Blueprint $products) {
            $products->bigIncrements('id');
            $products->string('name');
            $products->string('descr');
            $products->string('type');
            $products->float('price');
            $products->date('date');
            $products->string('path')->nullable();
            $products->unsignedBigInteger('categorie_id');
            $products->foreign('categorie_id')->references('id')->on('category');
            $products->timestamps();
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
