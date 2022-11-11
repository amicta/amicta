<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Models\Category;
use App\Models\Competition;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data['competitions'] = Competition::all();
        $data['categories'] = Category::with('competition')->get();

        return view('admin.pages.categories.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(CategoryCreateRequest $request)
    {
        Category::create($request->validated());

        return redirect()->route('admin.categories.index')->with('status', [
            'element' => 'success',
            'message' => 'Kategori baru berhasil disimpan!'
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Category $category)
    {
        $category->is_publish = $request->is_publish;
        $category->save();

        return redirect()->route('admin.categories.index')->with('status', [
            'element' => 'success',
            'message' => 'Update publikasi sukses!'
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')->with('status', [
            'element' => 'success',
            'message' => 'Kategori berhasil dihapus!'
        ]);
    }
}
