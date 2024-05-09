<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\UseCase\Category\CreateCategoryUseCase;
use App\UseCase\Category\EditCategoryUseCase;
use App\UseCase\Category\DeleteCategoryUseCase;
use App\UseCase\Category\GetEditCategoryUseCase;
use App\UseCase\Category\GetCategoryUseCase;

class CategoryController extends Controller
{
    public function index(GetCategoryUseCase $case)
    {
        $categories = $case();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request, CreateCategoryUseCase $case)
    {
        $case($request);
        return redirect()->route('category.index');
    }

    public function edit($id, GetEditCategoryUseCase $case)
    {
        $category = $case($id);
        return view('category/edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id, EditCategoryUseCase $case)
    {
        $case($request, $id);
        return redirect()->route('category.index');
    }

    public function destroy($id, DeleteCategoryUseCase $case)
    {
        $case($id);
        return redirect()->route('category.index');
    }
}
