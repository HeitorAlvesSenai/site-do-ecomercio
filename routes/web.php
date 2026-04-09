<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'home']);

Route::get('/carrinho', function () {
    return view('carrinho');
});
Route::get('/catalogo', [WebsiteController::class, 'catalogo']);
Route::get('/checkout', function () {return view('checkout');});
Route::get('/contato', function () {return view('contato');});
Route::get('/produto', function () {return view('produto');});
Route::get('/welcome', function () {return view('welcome');});
Route::get('/termos', function () {return view('termos');});

// Adimin

Route::get('/admin/', function () {
    return view('admin/index');
});
Route::get('/admin/clientes', function () {
    return view('admin/clientes');
});
Route::get('/admin/configuracoes', function () {
    return view('admin/configuracoes');
});
Route::get('/admin/pedidos', function () {
    return view('admin/pedidos');
});
Route::get('/admin/produtos', function () {
    return view('admin/produtos');
});