<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $validated = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string', 'min:6'],
        'role' => ['required', 'string'],
    ]);

    $request->session()->put('auth_role', ucfirst($validated['role']));
    $request->session()->put('auth_email', $validated['email']);

    return redirect()->route('dashboard')->with('status', 'Signed in as ' . ucfirst($validated['role']));
})->name('login.submit');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/dashboard', function () {
    $role = session('auth_role', 'Admin');
    $email = session('auth_email', 'admin@example.com');

    return view('dashboard', [
        'role' => $role,
        'email' => $email,
    ]);
})->name('dashboard');
