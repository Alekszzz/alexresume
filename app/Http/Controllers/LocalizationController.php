<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class LocalizationController extends Controller
{
    public function setLocale() {
        $lang = Input::get('lang');
        $lang = ($lang == 'ru') ? 'ru' : 'en';

        $_SESSION['lang'] = $lang;

        return Redirect::back();
    }
}
