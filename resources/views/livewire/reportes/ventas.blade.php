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

                    {{-- Fecha Incio --}}
                    <div class="mb-4 px-1">
                        <x-jet-label value="Fecha de inicio" />
                        <x-jet-input
                            type="date"
                            wire:model="fehcaInicio"
                        />
                    </div>

                    {{-- Fecha Fin --}}
                    <div class="mb-4">
                        <x-jet-label value="Fecha de inicio" />
                        <x-jet-input
                            type="date"
                            wire:model="fechaFin"
                        />
                    </div>

                    <div class="mb-4 mt-6 px-1">
                        <x-jet-button wire:click="buscar">
                            Buscar
                        </x-jet-button>
                    </div>

                </div>

                <div class="flex justify-center">

                    @if ($movimientos)
                        <table class="table table-fixed">
                            <thead>
                                <tr>
                                    <th>Vendedor</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($movimientos as $movimiento)
                                    <tr>
                                        <td>{{ $movimiento->vendedor->nombre }}</td>
                                        <td>{{ $movimiento->created_at}}</td>
                                        <td>{{ $movimiento->total}}</td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
