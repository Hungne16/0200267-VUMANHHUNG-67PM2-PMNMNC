<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
$listCate = Category::where('is_delete', 0)->get();
    return view('category.index', compact('listCate'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $htmlParent = Category::where('is_delete', 0)->get();
    return view('category.create', compact('htmlParent'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create($request->all());
    
    return redirect()->route('categories.index')->with('success', 'Thêm mới thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $category = Category::findOrFail($id);

    
    $htmlParent = Category::where('id', '!=', $id)->where('is_delete', 0)->get();

    
    return view('category.edit', compact('category', 'htmlParent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category = Category::findOrFail($id);
    $category->update($request->all());
    return redirect()->route('categories.index')->with('success', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */git add .
    public function destroy(Category $category)
    {
        $category = Category::findOrFail($id);
    
    $category->is_delete = 1;
    $category->save();

    return redirect()->route('categories.index')->with('success', 'Đã xóa danh mục!');
    }
}
