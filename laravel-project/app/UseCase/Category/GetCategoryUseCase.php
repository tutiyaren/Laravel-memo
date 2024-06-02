<?php
namespace App\UseCase\Category;
use App\Models\Category;

class GetCategoryUseCase
{
    public function __invoke()
    {
        return Category::get();
    }
}
