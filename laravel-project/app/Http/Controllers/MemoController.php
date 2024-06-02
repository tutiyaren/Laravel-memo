<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemoRequest;
use App\UseCase\Memo\CreateMemoUseCase;
use App\UseCase\Memo\DeleteMemoUseCase;
use App\UseCase\Memo\EditMemoUseCase;
use App\UseCase\Memo\GetEditMemoUseCase;
use App\UseCase\Memo\GetMemoUseCase;
use App\UseCase\Memo\GetNewMemoUseCase;
use App\UseCase\Memo\GetOldMemoUseCase;
use App\UseCase\Memo\GetCreateMemoUseCase;

class MemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function top(Request $request, GetMemoUseCase $case)
    {
        $memos = $case($request);
        return view('memo.top', compact('memos'));
    }

    public function new(Request $request, GetNewMemoUseCase $case)
    {
        $memos = $case($request);
        return view('memo.top', compact('memos'));
    }

    public function old(Request $request, GetOldMemoUseCase $case)
    {
        $memos = $case($request);
        return view('memo.top', compact('memos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(GetCreateMemoUseCase $case)
    {
        $categories = $case();
        return view('memo.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemoRequest $request, CreateMemoUseCase $case)
    {
        $case($request);
        return redirect()->route('memo.top');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, GetEditMemoUseCase $case)
    {
        list($memo, $categories) = $case($id);
        return view('memo.edit', compact('memo', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MemoRequest $request, $id, EditMemoUseCase $case)
    {
        $case($request, $id);
        return redirect()->route('memo.top');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, DeleteMemoUseCase $case)
    {
        $case($id);
        return redirect()->route('memo.top');
    }

    public function verror()
    {
        return view('memo.verror');
    }
}
