<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boglanish;

class XabarController extends Controller
{
    public function xabarsave(Request $request)
    {
        // dd($request);
        $get = new Boglanish();
        $get->name = $request->name;
        $get->email = $request->email;
        $get->number = $request->number;
        $get->title = $request->title;
        $get->save();
        return back();
    }
}
