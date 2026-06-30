<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeywordController extends Controller
{
    /**
     * نمایش صفحه اصلی ابزار استخراج کلمات کلیدی
     */
    public function index()
    {
        return view('google_suggestion_tool');
    }
}
