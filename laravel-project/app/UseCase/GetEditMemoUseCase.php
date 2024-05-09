<?php
namespace App\UseCase;
use App\Models\Memo;
use App\Models\Category;

class GetEditMemoUseCase
{
    public function __invoke($id)
    {
        $memos = Memo::find($id);
        $categories = Category::get();
        return [$memos, $categories];
    }
}
