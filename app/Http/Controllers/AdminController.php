<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminController extends Controller
{
  public function __construct()
  {
   $this->middleware('auth:admin');
  }
  // function to show dashboard page for admin
  public function index()
  {
    return view('admin.pages.home.page');
  }

}
