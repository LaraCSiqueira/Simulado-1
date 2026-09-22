<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
{
    $movimentacoes = \App\Models\Movimentacao::with('produto')
        ->latest()
        ->paginate(10);

    return view('livewire.auth.dashboard', [
        'movimentacoes' => $movimentacoes
    ]);
}
}
