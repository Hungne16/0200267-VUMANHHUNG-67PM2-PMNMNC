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
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Tên danh mục
        $table->text('description')->nullable(); // Mô tả
        $table->string('image')->nullable(); // Ảnh (có thể null)
        $table->unsignedBigInteger('parent_id')->nullable(); // Danh mục cha
        $table->boolean('is_active')->default(1); // Trạng thái hiển thị
        $table->boolean('is_delete')->default(0); // Cờ xóa mềm
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
