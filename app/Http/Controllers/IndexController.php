<?php

namespace App\Http\Controllers;

use Config;
use Session;

class IndexController extends Controller
{
    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return redirect('/');
    }
}
