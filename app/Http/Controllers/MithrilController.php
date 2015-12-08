<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MithrilController extends Controller
{
    public function getIndex() {
        return view('mithril/index');
    }

    public function getPages() {
        return response()->json([['url' => 'http://localhost/sample/hoge', 'title' => 'hoge']]);
    }
}
