<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel products.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_distributor');
            $table->string('name');
            $table->bigInteger('price');
            $table->string('category');
            $table->text('description');
            $table->string('image');
            $table->integer('discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Membalikkan migrasi dan menghapus tabel products.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
