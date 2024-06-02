<?php
namespace App\UseCase\Memo;
use App\Models\Memo;
use Illuminate\Http\Request;

class GetOldMemoUseCase
{
    public function __invoke(Request $request)
    {
        return Memo::getAllDescCreated();
    }
}
