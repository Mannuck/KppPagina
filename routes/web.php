<?php

use App\Livewire\ComponentNosotros;
use App\Livewire\Contacto;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;



Route::get('/', Home::class)->name('home');

Route::get('/Contacto', Contacto::class)->name('Contacto');

Route::get('/Nosotros', ComponentNosotros::class)->name('Nosotros');
