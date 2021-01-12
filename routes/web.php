<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Frontendcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\user;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile',[Frontendcontroller::class, 'profile'])->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('Home/home');
});



Route::get('/home',[Frontendcontroller::class, 'home']);
Route::get('/in',[Frontendcontroller::class, 'index']);
Route::get('/ob',[Frontendcontroller::class, 'obj']);
Route::get('/ue',[Frontendcontroller::class, 'upe']);
Route::get('/p',[Frontendcontroller::class, 'pr']);
Route::get('/ss',[Frontendcontroller::class, 'sts']);

Route::get('/h1',[Frontendcontroller::class, 'h']);

Route::get('/lgn',[Frontendcontroller::class, 'log']);
Route::get('/sg',[Frontendcontroller::class, 'sgn']);

Route::get('/fp',[Frontendcontroller::class, 'fgp']);
Route::get('/a',[Frontendcontroller::class, 'a']);

Route::get('/admin',[Frontendcontroller::class, 'admin']);
Route::post('/waitfortheacceptance',[Frontendcontroller::class, 'wfa']);
Route::get('/waitfortheacceptance',[Frontendcontroller::class, 'wfa']);

Route::get('/aacademic',[AdminController::class, 'aaca']);
Route::get('/aindustrial',[AdminController::class, 'aind']);
Route::get('/astudent',[AdminController::class, 'astu']);

Route::get('/x',[LoginController::class,'index']);
Route::post('/checklogin',[LoginController::class,'checklogin']);
Route::get('/success',[LoginController::class,'successlogin']);
Route::get('/logout',[LoginController::class,'logout']);

Route::resource('/users', UserController::class);

Route::get('/inl',[UserController::class, 'indexl']);

Route::get('/welcome', function () {
    return view('a');
});

Route::get('/urpd',[UserController::class,'index']);
Route::get('/create',[UserController::class,'create']);
Route::post('/store',[UserController::class,'store']);
Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
Route::patch('/update/{id}',[UserController::class,'update'])->name('update');
Route::delete('/delete/{id}',[UserController::class,'destroy'])->name('delete');

Route::get('Admin/Admin',function(){
    $data=App\user::all();
    return view('Admin/Admin')->with('table_data',$data);
});
/*Route::get('/profilea/{id}', function () {
    return view('profile.profile');
})->middleware(['auth'])->name('profile.profile');

Route::get('/profile/{id}',[ProfileController::class,'index']);
/*Route::get('/profile', function () {
    //
})->middleware('auth');

Route::middleware(['auth'])->group(function () {
    //
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/