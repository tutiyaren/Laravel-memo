<?php
namespace App\UseCase;
use App\Models\Memo;
use Illuminate\Http\Request;

class CreateMemoUseCase
{
    public function __invoke(Request $request)
    {
        $data = $request->validated();
        Memo::create($data);
    }
}
