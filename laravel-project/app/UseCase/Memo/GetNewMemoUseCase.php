<?php
namespace App\UseCase\Memo;
use App\Models\Memo;
use Illuminate\Http\Request;

class GetNewMemoUseCase
{
    public function __invoke(Request $request)
    {
        return Memo::getAllAscCreated();
    }
}
