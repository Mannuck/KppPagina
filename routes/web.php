<?php

use App\Livewire\ComponentBPA;
use App\Livewire\ComponentNosotros;
use App\Livewire\ComponentPyC;
use App\Livewire\Contacto;
use App\Livewire\ComponentMicrosoftEducation;
use App\livewire\ComponentEproctoring;
use App\Livewire\ComponentLms;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;



Route::get('/', Home::class)->name('home');
Route::get('/Contacto', Contacto::class)->name('Contacto');
Route::get('/Nosotros', ComponentNosotros::class)->name('Nosotros');
Route::get('/BPA', ComponentBPA::class)->name('BPA');
Route::get('/PyC', ComponentPyC::class)->name('PyC');
route::get('/microsfotE', ComponentMicrosoftEducation::class)->name('microsfotE');
route::get('/lms', ComponentLms::class)->name('lms');
route::get('/eproctoring', ComponentEproctoring::class)->name('eproctoring');
