<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function getImeageSlider()
    {
        return "00";
    }
    public function setImeageSlider(Request $request)
    {
        dd($request->all());
    }
}
