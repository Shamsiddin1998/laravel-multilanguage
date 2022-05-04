<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function change(Request $request)
    {
        App::setLocale($request->language);
        session()->put('locale', $request->language);
        return redirect()->back();
    }
}
