<?php
namespace App\UseCase;
use App\Models\Memo;
use App\Models\Memo_Category;
use Illuminate\Http\Request;

class CreateMemoUseCase
{
    public function __invoke(Request $request)
    {
        $data = $request->validated();
        $category_id = $request->input('name');
        $memo = Memo::create($data);
        $memo_id = $memo->id;
        Memo_Category::create([
            'category_id' => $category_id,
            'memo_id' => $memo_id,
        ]);
    }
}
