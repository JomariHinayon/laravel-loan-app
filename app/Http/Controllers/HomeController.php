<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Application;

class HomeController extends Controller
{
    public function index() {
        return view('home.userpage');
    }

    public function redirect() {
        $user_type=Auth::user()->user_type;

        if ($user_type == '1') {
            return view('admin.home');
        } else if ($user_type == '0') {
            return view('home.dashboard');
        }
    }

    public function new_personal_loan(Request $request) {
        return view('application.new-application');

    }

    public function loan_details() {
        return view('home.loan_details');

    }

    public function apply_loan() {
        return view('home.apply_loan');

    }

    public function submit_personal_loan(Request $request) {
        $data = new application;

        $data->first_name=$request->fname;
        $data->last_name=$request->lname;
        $data->contact_number=$request->fname;
        $data->months=$request->months;
        $data->amount=$request->amount;
        $data->save();

        return redirect()->back();

    }


}
