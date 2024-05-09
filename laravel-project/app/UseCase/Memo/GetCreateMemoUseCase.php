<?php
namespace App\UseCase\Memo;
use App\Models\Category;

class GetCreateMemoUseCase
{
    public function __invoke()
    {
        return Category::get();
    }
}
