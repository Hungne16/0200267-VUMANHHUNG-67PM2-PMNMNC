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
        $table->id(); // ID tự tăng \
        $table->string('name'); // Tên sản phẩm
        $table->text('description')->nullable(); // Mô tả sản phẩm \
        $table->integer('price'); // Giá sản phẩm
        $table->integer('quantity'); // Số lượng trong kho
        $table->string('category')->default('General'); // Danh mục sản phẩm
        $table->timestamps(); // Tự động tạo cột created_at và updated_at
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
