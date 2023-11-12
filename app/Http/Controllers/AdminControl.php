<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControl extends Controller
{
    public function view_application() {
        return view('admin.application');
    }
}
