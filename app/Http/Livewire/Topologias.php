<?php

namespace App\Http\Livewire;

use App\Models\Topologia;
use Livewire\Component;

class Topologias extends Component
{
    public $observacao = null;

    public $listeners = [
        'update' => 'update'
    ];

    public function saveObs($id)
    {
        $topologia = Topologia::find($id);
        $topologia->update([
            'observacao' => $this->observacao
        ]);
    }

    public function update($idImagem, $imagem)
    {
        $topologia = Topologia::find($idImagem);
        $topologia->update([
            'imagem' => $imagem
        ]);
    }

    public function render()
    {
        return view('livewire.topologias', [
            'topologias' => Topologia::all()
        ]);
    }
}
