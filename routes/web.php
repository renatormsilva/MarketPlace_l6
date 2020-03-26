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
    //$loja = \App\Store::find(1);
     // return $loja->products; | $loja->products()->where('id', 9)->get();

     // pegar as lojas de uma categoria de uma loja
    // $categoria = \App\category::find(1);
    // $categoria->products;
    //return \App\User::all();  

    // Criar um loja para um usuario
    // $user = \App\User::find(10);
    // $store = $user->store()->create([
    //     'name' => 'Loja teste',
    //     'description' => 'Loja teste de produtos importados',
    //     'mobile_phone' => 'xx-xxxx-xxxx',
    //     'phone' => 'xx-xxx-xxxx',
    //     'slug' => 'oja-teste',
    // ]);

    // criar um produto para uma loja

    // $store = \App\Store::find(41);
    // $product = $store->products()->create([
    //     'name' => 'Macbook Pro',
    //     'description' => 'NOtebook Pro novo - brabo',
    //     'body' =>'naruto ao som de...',
    //     'price' => 2000.99,
    //     'slug' => 'macbook-pro',
    // ]);

    // Criar uma categoria 
    // \App\Category::create([
    //     'name' => 'Games',
    //     'decription' => 'null',
    //     'slug' => 'games'
    // ]);
    
    // \App\Category::create([
    //     'name' => 'Notebooks',
    //     'decription' => 'null',
    //     'slug' => 'notebooks'
    
    // ]);

    // return \App\Category::all();

    // adicionar um produto a uma categoria ou vice-versa

    $product = \App\Product::find(41);
    dd($product->categories()->sync([1,2]));

});

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){

    Route::prefix('/stores')->name('stores.')->group(function(){

        Route::get('/', 'StoreController@index')->name('index');
        Route::get('/create', 'StoreController@create')->name('create');
        Route::post('/store', 'StoreController@store')->name('store');
        Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
        Route::post('/update/{store}', 'StoreController@update')->name('update');
        Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
    });
    
});






