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

use App\Http\Controllers\AuthController;

Route::get('/signin', [AuthController::class, 'SignIn'])->name('auth.signin');
Route::post('/signin', [AuthController::class, 'CheckSignIn'])->name('auth.check');

// Route de nhap tuoi
Route::get('/input-age', function () {
    return view('input_age');
})->name('age.input');

// Route xy ly luu tuoi vao session
Route::post('/input-age', function (Illuminate\Http\Request $request) {
    $request->session()->put('age', $request->input('age'));
    return redirect()->route('admin.page');
});

// Route duoc bao ve boi middleware CheckAge, chi 18 tuoi moi vao duoc
Route::get('/admin', function () {
    return "Chào mừng đến với trang admin (18+)";
})->middleware('check.age')->name('admin.page');