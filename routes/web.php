<?php

use App\Livewire\Dashboard;
use App\Livewire\Login;
use App\Livewire\Produto\ProdutoCreate;
use Illuminate\Support\Facades\Route;

//LOGIN
Route::get('/login', Login::class)->name('login');

//DASHBOARD
Route::get('/dashboard', Dashboard::class)->name('dashboard');

//PRODUTO
Route::get('produto/create', ProdutoCreate::class)->name('produto.create');

