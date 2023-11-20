<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function view_dashboard() {
        return view('admin.dashboard');
    }
    
    public function view_application() {
        return view('admin.application');
    }

    public function view_new_application() {
        return view('admin.new-application');
    }
    
}
