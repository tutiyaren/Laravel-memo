<?php
namespace App\UseCase\Category;
use App\Models\Category;
use Illuminate\Http\Request;

class CreateCategoryUseCase
{
    public function __invoke(Request $request)
    {
        $name = $request->input('name');
        $category = new Category();
        $category->name = $name;
        $category->save();
    }
}
