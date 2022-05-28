<div>
    <x-slot name="header">

        <x-jet-nav-link class="cursor-pointer" :active="false">
            Reporte de Ventas
        </x-jet-nav-link>

        <x-jet-nav-link class="cursor-pointer" :active="false">
            Reporte de Vendedores
        </x-jet-nav-link>

        <x-jet-nav-link class="cursor-pointer" :active="false" wire:click="rClientes">
            Reporte de Clientes
        </x-jet-nav-link>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if ($openVendedores)
                    @livewire('reportes.vendedores')
                @endif

                @if ($openClientes == true)
                    @livewire('reportes.clientes')
                @endif

                {{$message}}
            </div>
        </div>
    </div>
</div>
