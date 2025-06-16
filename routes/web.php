<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\App; // Importe a fachada App
use App\Http\Livewire\GerarExamePdf;
use Illuminate\Support\Facades\Auth;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/alunos', function () {
    return view('alunos');
})->name('alunos')->middleware('auth');

Route::fallback(function(){
    return redirect()->route('login');
});





Route::get('/examesuser', function () {
    return view('examesuser');
})->name('examesuser');


Route::get('/contato', function () {
    return view('contato');
})->name('contato');




Route::get('/listexames', function () {
    return view('listexames');
})->name('listexames');


Route::get('/cardpdf', function () {
    return view('cardpdf');
})->name('cardpdf');

Route::get('/baixar-cardiograma', function () {
    $pdf = Pdf::loadView('cardpdf');
    return $pdf->download('Eletrocardiograma_'.Auth::user()->name.'_05-05-2023.pdf');
});


Route::get('/paciente', function () {
    return view('paciente');
})->name('paciente')->middleware('auth');

Route::middleware('auth:paciente')->group(function () {
    Route::get('/meus-dados', \App\Livewire\DadosPaciente::class)->name('paciente.dados');
});

Route::get('/baixar-hemograma', function () {
    $pdf = Pdf::loadView('listexames');
    return $pdf->download('Hemograma_Completo'.Auth::user()->name.'_10-05-2023.pdf');
});





