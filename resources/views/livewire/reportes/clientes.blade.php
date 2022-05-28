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
                            placeholder="Buscar cliente por nombre"
                            wire:model="buscarCliente"
                        />
                        <select
                            class="w-full select overflow-hidden"
                            size="3"
                            wire:model.defer="cliente_id"
                        >
                        @foreach($clientes as $cliente)
                            <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="mb-4 px-1">
                        <x-jet-label value="Fecha de inicio" />
                        <x-jet-input
                            type="date"
                            wire:model="fechaInicio"
                        />
                    </div>

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

                    @if ($compras)
                        <table class="table table-fixed">
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Tipo de Documento</th>
                                    <th>Metodo de Pago</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($compras as $compra)
                                    <tr>
                                        <td>{{ $compra->created_at }}</td>
                                        <td>{{ $compra->tipoDocumento->nombre}}</td>
                                        <td>{{ $compra->metodoPago->nombre}}</td>
                                        <td>{{ $compra->total}}</td>
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
