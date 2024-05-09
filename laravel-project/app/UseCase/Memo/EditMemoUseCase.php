<?php
namespace App\UseCase\Memo;
use App\Models\Memo;
use App\Models\Memo_Category;
use Illuminate\Http\Request;

class EditMemoUseCase
{
    public function __invoke(Request $request, $id)
    {
        $data = $request->validated();
        $category_id = $request->input('name');
        $memo = Memo::find($id);
        $memo->update($data);
        $memoCategory = Memo_Category::where('memo_id', $id)->first();
        if($memoCategory) {
            $memoCategory->update(['category_id' => $category_id]);
            return;
        }
        Memo_Category::create([
            'category_id' => $category_id,
            'memo_id' => $id,
        ]);
    }
}
