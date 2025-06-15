<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MenuPainel extends Component
{
    public function render()
    {
        return view('livewire.menu-painel');
    }

  public function logout()
{
    Auth::logout();

    // Opção 1: Redirecionamento simples
    return redirect('/'); // Para a rota raiz

    // Opção 2: Redirecionamento nomeado (recomendado)
    return redirect()->route('home');

    // Opção 3: Para Livewire
    return $this->redirect('/', navigate: true);
}
}
