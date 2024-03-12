<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', function () {
    if(!Auth::check()) {
        return view('home');
    } else {
        $users = User::all();
        return view('home', ['users' => $users]);
    }
});

Auth::routes();

// Route::get('/register', function () {
//     return view('auth.register');
// });