<?php

namespace App\Http\Controllers;
use App\Models\Product; //gọi Model
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        // Lấy toàn bộ sản phẩm từ database
        $products = Product::all(); 
        
        // Trả về view và gửi kèm biến products
        return view('product.index', compact('products'));
    }
}