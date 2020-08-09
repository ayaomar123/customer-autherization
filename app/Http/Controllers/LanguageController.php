<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use URL;

class LanguageController extends Controller
{
    public function setLocale($locale='en'){
        if (!in_array($locale, ['en', 'ar'])){
            $locale = 'en';
        }
        Session::put('locale', $locale);
        return redirect(url(URL::previous()));
    }
}
