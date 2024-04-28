<?php
namespace App\UseCase;
use App\Models\Memo;
use Illuminate\Http\Request;

class GetMemoUseCase
{
    public function __invoke(Request $request)
    {
        $keyword = $request->input('keyword');
        $query = Memo::search($keyword);
        return $query->get();
    }
}
