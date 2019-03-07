<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller {

    public function index()
    {
        return view('profile.index');
    }

    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        return view('profile.edit');
    }
}
