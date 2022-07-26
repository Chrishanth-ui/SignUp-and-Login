<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\Login;
use App\Http\Livewire\Signup;
use App\Http\Livewire\Projects;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/signup', Signup::class)->name('signup');
Route::get('/projects', Projects::class)->name('projects');

