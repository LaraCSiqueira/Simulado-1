<?php

use App\Livewire\Login;
use App\Livewire\Produto\ProdutoCreate;
use Illuminate\Support\Facades\Route;

//LOGIN
Route::get('/login', Login::class)->name('login');

//PRODUTO
Route::get('produto/create', ProdutoCreate::class)->name('produto.create');
