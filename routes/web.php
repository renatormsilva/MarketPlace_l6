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
    // $user = \App\User::find(41);
    // $user->update([
    //     'name' => 'novo nome com update'
    // ]);
    // dd($user);

    // pegar uma loja de um usuário
    // $user = \App\User::find(4);

    // dd($user->store()->count()); // O objeto único (STORE)  se for colletion de dados(Objetos)

    // pegar os produtos de uma loja?
    $loja = \App\Store::find(1);
     // return $loja->products; | $loja->products()->where('id', 9)->get();

     // pegar as lojas de uma categoria de uma loja
    // $categoria = \App\category::find(1);
    // $categoria->products;
    return \App\User::all();  

});

Route::get('/', function () {
    return view('welcome');
});
