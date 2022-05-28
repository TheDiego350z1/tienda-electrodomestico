<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;

class Index extends Component
{
    public $openVentas = false;

    public $openVendedores = true;

    public $openClientes = false;

    public $message = '';

    protected $listeners = ['render' => 'render'];

    public function render()
    {
        return view('livewire.reportes.index');
    }

    public function rVentas()
    {

    }

    public function rVendedores()
    {

    }

    public function rClientes()
    {
        $this->openClientes = true;

        $message = 'hola;';

        $this->reset([
            'openVentas',
            'openVendedores'
        ]);

        $this->emit('render', 'reportes.index');

    }
}
