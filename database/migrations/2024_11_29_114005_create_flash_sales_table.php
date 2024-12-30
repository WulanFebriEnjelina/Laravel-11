<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlashSalesTable extends Migration
{
    public function up()
{
    Schema::create('flash_sales', function (Blueprint $table) {
        $table->id();
        $table->string('product_name');
        $table->decimal('original_price', 10, 2);
        $table->decimal('discount_price', 10, 2);
        $table->integer('stock');
        $table->timestamp('end_time');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('flash_sales');
}
}
