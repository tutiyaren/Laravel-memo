<?php
namespace App\UseCase\Category;
use App\Models\Category;

class DeleteCategoryUseCase
{
    public function __invoke($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}
