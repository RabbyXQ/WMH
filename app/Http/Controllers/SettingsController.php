<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
   public function index()
    {
        // Return a view (make sure this view exists)
        return view('settings.index');
    }
}
