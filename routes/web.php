<?php

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
//Halaman Login
Route::get('/login',function(){
    if(Auth::check()){
        return redirect('/lomba');
    }
    return view('login');
})->name('login');

Route::post('/login', 'UserController@login');
//End Halaman Login

//Halaman Register
Route::get('/register',function(){
    if(Auth::check()){
        return redirect('/');
    }
    return view('register');
})->name('register');//<-opsional

Route::post('/register', 'UserController@register');
//End Halaman Register
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/user',function(){
        return view('user');
    });    

    Route::get('/dashboard',function(){
        return view('dashboard');
    });

    Route::get('/admin',function(){
        $role = Auth::user()->role;
        if($role != 'admin'){
            return 'Hanya admin yang masuk';
        }
        return view('admin.index');

    });
    //Start LOmba
    Route::get('lomba', 'LombaController@index');
    Route::get('lomba/add','LombaController@add');
    Route::post('lomba','LombaController@create');
    //edit
    Route::get('lomba/{id}/edit','LombaController@edit');
    Route::post('lomba/{id}/edit','LombaController@update');
    //delete
    Route::get('lomba/{id}/delete','LombaController@delete');
    Route::get('lomba/{id}/confirmDelete','LombaController@confirmDelete');


});

//detail
Route::get('lomba/{id}','LombaController@detail');
//End Lomba