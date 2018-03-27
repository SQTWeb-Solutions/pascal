<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // function to show index page
    public function index()
    {
      return view('pages.home.page');
    }
    // function to show contact page
    public function contact()
    {
      return view('pages.contact.page');
    }
    // function to show sponsors page
    public function sponsors()
    {
      return view('pages.foundation.sponsors.page');
    }
}
