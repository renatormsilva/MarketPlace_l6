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

Route::get('/model', function(){
     // $productList = \App\Product::all(); // select * from products
    
    // $user = \App\User::all(); // retorna todos os usuarios
    // $user = \App\User::create([
    //     'name' => 'renatinhosenpai',
    //     'email' => 'renatinhosenpai@gamil.com',
    //     'password' => bcrypt('12345')
    // ]);
    $user = \App\User::find(41);
    $user->update([
        'name' => 'novo nome com update'
    ]);
    dd($user);
     return \App\User::all();  

});

Route::get('/', function () {
    return view('welcome');
});
