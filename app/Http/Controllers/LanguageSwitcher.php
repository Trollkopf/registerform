<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

class LanguageSwitcher extends Controller
{
    public function en(): View
    {
        return view('regForm.en');
    }

    public function es(): View
    {
        return view('regForm.es');
    }
}
