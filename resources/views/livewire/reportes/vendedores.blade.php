<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Reporte de Vendedores
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-4 my-4 flex">

                    <div class="mb-4 w-3/5">
                        <x-jet-label value="Buscar vendedor" />
                        <x-jet-input
                            type="text"
                            class="w-full"
                            placeholder="Buscar vendedor por codigo"
                            wire:model="buscarVendedor"
                        />
                        <select
                            class="w-full select overflow-hidden"
                            size="3"
                            wire:model.defer="vendedor_id"
                        >
                        @foreach($vendedores as $vendedor)
                            <option value="{{$vendedor->id}}">{{$vendedor->nombre}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="mb-4 px-1">
                        <x-jet-label value="Fecha de inicio" />
                        <x-jet-input
                            type="date"
                            wire:model="fechaInicio"
                        />
                        {{$fechaInicio}}
                    </div>

                    <div class="mb-4">
                        <x-jet-label value="Fecha de inicio" />
                        <x-jet-input
                            type="date"
                            wire:model="fechaFin"
                        />
                        {{$fechaFin}}
                    </div>

                    <div class="mb-4 mt-6 px-1">
                        <x-jet-button wire:click="buscar">
                            Buscar
                        </x-jet-button>
                    </div>

                </div>

                <div>
                    {{-- {{$vendedor->facturas}} --}}
                    {{$ventas}}
                </div>
            </div>
        </div>
    </div>
</div>
