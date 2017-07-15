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

/*Route::get(['prefix' => 'painel', 'middleware' => 'auth'], function (){
    Route::get('/users', function (){
        return 'Users';
    });
    Route::get('/financeiro', function (){
        return 'ContatoFinanceiro';
    });
    Route::get('/', function (){
        return 'Dashboard';
    });
});

Route::get('/login', function (){
    return 'Login';
});

Route::get('/categoria/{idCat}', function ($idCat){
    return "Post da categoria{$idCat}";
});

Route::get('/categoria2/{idCat?}', function ($idCat = null){
    return "Post da categoria{$idCat}";
});

Route::match(['get', 'post'], '/math', function (){
    return 'match';
});

Route::any('/any', function (){
    return 'any';
});

Route::post('/post', function (){
    return 'Post';
});

Route::get('/contato', function (){
    return 'Contato';
});

Route::get('/nome/nome1/nome2', function (){
    return 'rota Grande';
})->name('rota.nomeada');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('site/indexNew');
} );
*/

Route::resource('/produtos', 'ProductController');

//Route::get('/produtos', 'ProductController@test');



Route::get('/', 'SystemController@index' );



Route::get('/contato', 'SystemController@contato' );

Route::get('/categoria/{id}', 'SystemController@categoria' )->middleware('auth');

Route::get('/categoria2/{id?}', 'SystemController@categoriaOp' );

Route::get('/empresa', function (){
    return view('empresa');
});

Route::get('/home', [
        'uses' => 'SystemController@index',
        'as' => 'home'
    ]);