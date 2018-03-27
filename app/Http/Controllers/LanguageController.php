<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Translation\Facades\Translation;
class LanguageController extends Controller
{
    // Change the language to english
    public function english() {
      Translation::setLocale('en');
      return redirect()->route('index');
    }

    // Change the language to french
    public function french() {
      Translation::setLocale('fr');
      return redirect()->route('index');
    }

    // Change the language to spanish
    public function spanish() {
      Translation::setLocale('es');
      return redirect()->route('index');
    }
}
