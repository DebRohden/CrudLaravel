<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerLivraria;
use App\Http\Controllers\ControllerLivros;
use App\Http\Controllers\controllerIsbn;
use App\Http\Controllers\controllerEditora;
use App\Http\Controllers\controllerAutor;
use App\Http\Controllers\controllerHome;

Route::get('/', [controllerHome::class, 'index']);

Route::resource('/livros'  , ControllerLivros::class);
Route::resource('/isbn'    , controllerIsbn::class);
Route::resource('/editora' , controllerEditora::class);
Route::resource('/autor'   , controllerAutor::class);

Route::post('/livros/adicionaAutor', [ ControllerLivros::class , 'adicionaAutor']);
Route::post('/autor/buscaAutor'    , [ ControllerAutor::class  , 'buscaAutor']);
Route::post('/editora/buscaEditora', [ controllerEditora::class, 'buscaEditora']);
Route::post('/isbn/buscaIsbn'      , [ controllerIsbn::class   , 'buscaIsbn']);
Route::post('/livros/buscaLivro'   , [ ControllerLivros::class , 'buscaLivro']);
Route::post('/livros/removeAutor'  , [ ControllerLivros::class , 'removeAutor']);
