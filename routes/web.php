<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedoresController;

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



Route::middleware('auth')->group(function () {
       

        Route::post('/add-fornecedores', 'FornecedoresController@AddFornecedores')->name('addfornecedores');
        Route::post('/edit-fornecedores', 'FornecedoresController@editFornecedores')->name('editFornecedores');
        Route::post('/add-produtos', 'ProdutosController@AddProdutos')->name('addProdutos');
        
        Route::get('/Fornecedores', 'ViewController@ShowFornecedores')->name('fornecedores');
        Route::get('/Adicionar-Fornecedores', 'ViewController@formAdicionaFornecedores')->name('addfornecedores');


    });



Route::get('/', 'LoginController@index')->name('index');
Route::post('/login', 'LoginController@login')->name('login');




