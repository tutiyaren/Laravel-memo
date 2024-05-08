<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {
        $name = $request->input('name');
        $category = new Category();
        $category->name = $name;
        $category->save();

        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category/edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $name = $request->input('name');
        $category = Category::find($id);
        $category->update(['name' => $name]);
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
