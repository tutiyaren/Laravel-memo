<?php
namespace App\UseCase;
use App\Models\Memo;

class GetEditMemoUseCase
{
    public function __invoke($id)
    {
        return Memo::find($id);
    }
}
