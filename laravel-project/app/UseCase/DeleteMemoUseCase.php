<?php
namespace App\UseCase;
use App\Models\Memo;

class DeleteMemoUseCase
{
    public function __invoke($id)
    {
        $memo = Memo::find($id);
        $memo->memo_categories()->delete();
        $memo->delete(); 
    }
}
