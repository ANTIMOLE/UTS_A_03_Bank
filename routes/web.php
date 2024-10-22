<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('Admin/dashboard', function () {
    return view('Admin.dashboard');
});

Route::get('Admin/transaction', function () {
    return view('Admin.transaction');
});

Route::get('Admin/deposit', function () {
    return view('Admin.deposit');
});

Route::get('Admin/withdraw', function () {
    return view('Admin.withdraw');
});

Route::get('Admin/pending', function () {
    return view('Admin.pending');
});

Route::get('Admin/loan', function () {
    return view('Admin.loan');
});

Route::get('Admin/active', function () {
    return view('Admin.active');
});

Route::get('Admin/master', function () {
    return view('Admin.master');
});

Route::get('Transaction/deposit', function () {
    return view('Transaction.deposit');
});
Route::get('Transaction/loan', function () {
    return view('Transaction.loan');
});
Route::get('Transaction/withdraw', function () {
    return view('Transaction.withdraw');
});

