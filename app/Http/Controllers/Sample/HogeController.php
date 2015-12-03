<?php

namespace App\Http\Controllers\Sample;

use App\Http\Requests\Sample\Hoge\CreateRequest;
use App\Models\Eloquent\Hoge;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HogeController extends Controller
{
    public function getIndex()
    {
        return view('sample/hoge/index');
    }

    public function postCreate(CreateRequest $request)
    {
        Hoge::create($request->all());
        return view('sample/hoge/list', ['list'=>Hoge::get()]);
    }

    public function getList()
    {
        return view('sample/hoge/list', ['list'=>Hoge::get()]);
    }
}
