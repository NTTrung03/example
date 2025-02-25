<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'address' => 'nullable',
            'phone' => 'nullable',
            'role' => 'nullable',
        ]);

        $user = User::create($request->all());

        return redirect()->route('users.create')->with('success', 'User created successfully.');
    }

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|string|max:50',
        ]);

        $user->role = $request->role;
        $user->save();

        return response()->json(['success' => 'Role updated successfully']);
    }

}
