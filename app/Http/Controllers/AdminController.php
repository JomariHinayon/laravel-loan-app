<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function view_users() {
        $users = User::all();

        return view('admin.users', ['users' => $users]);
    }
    
    public function login() {
        return view('auth.login-admin');
    }
    
    public function delete_user(User $user) {
        $user->delete();
        return redirect('/admin/users')->with('success', 'User deleted successfully.');
    }

    public function edit_user(User $user) {

        return view('admin.user_edit',  compact('user'));
    }

    public function update_user(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            // Add other fields you want to validate and update
        ]);

        $user->update($request->all());

        return redirect('/admin/users')->with('success', 'User updated successfully.');
    }
}
