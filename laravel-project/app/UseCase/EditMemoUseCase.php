<?php
namespace App\UseCase;
use App\Models\Memo;
use Illuminate\Http\Request;

class EditMemoUseCase
{
    public function __invoke(Request $request, $id)
    {
        $data = $request->validated();
        Memo::find($id)->update($data);
    }
}
