<?php
namespace App\UseCase;
use App\Models\Memo;
use Illuminate\Http\Request;

class GetOldMemoUseCase
{
    public function __invoke(Request $request)
    {
        return Memo::getAllDescCreated();
    }
}
