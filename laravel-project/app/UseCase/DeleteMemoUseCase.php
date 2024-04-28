<?php
namespace App\UseCase;
use App\Models\Memo;

class DeleteMemoUseCase
{
    public function __invoke($id)
    {
        Memo::find($id)->delete();
    }
}
