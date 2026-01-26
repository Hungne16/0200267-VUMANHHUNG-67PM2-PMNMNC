<?php

use Illuminate\Support\Facades\Route;

// tra ve home 
Route::get('/', function () {
    return view('home');
})->name('home');

// gom nhom product
Route::prefix('product')->group(function () {
    
    // tra ve vieuw product.index
    Route::get('/', function () {
        return view('product.index');
    })->name('product.index');

    // tra ve view product.list
    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    // tham so id co dieu kien va gia tri mac dinh
    
Route::get('/{id?}', function ($id = '123') {
    return "Sản phẩm ID: " . $id;
})->where('id', '[A-Za-z0-9]+')->name('product.detail');
});

// thong tin sinh vien voi tham so mac dinh
Route::get('/sinhvien/{name?}/{mssv?}', function ($name = "Luong Xuan Hieu", $mssv = "123456") {
    return "Sinh viên: " . $name . " - MSSV: " . $mssv;
})->name('student.info');

// tra ve ban 
Route::get('/banco/{n}', function ($n) {
    return view('banco', ['n' => $n]);
})->name('chessboard');

//xu ly thong tin khong tim thay
Route::fallback(function () {
    return view('error.404');
});