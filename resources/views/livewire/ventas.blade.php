<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ventas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Datos Generales de Facturación --}}
                <div class="mx-4 my-4 flex">
                    <div class="w-1/2">
                        <div class="w-full mb-4">
                            <span>Tipo de documento</span>
                            <select class="select" wire:model="tipoDocumento">
                                <option></option>
                                @foreach($documentos as $documento)
                                    <option value="{{$documento->id}}">{{$documento->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="w-full mb-4">
                            <span>Metodo de pago:</span>
                            <select class="select">
                                <option></option>
                                @foreach ($tipoPagos as $tipoPago)
                                    <option value="{{$tipoPago->id}}">{{$tipoPago->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="w-full mb-4">
                            <span>Tipo de entrega:</span>
                            <select class="select">
                                <option></option>
                                @foreach ($tipoEntregas as $tipoEntrega)
                                <option value="{{$tipoEntrega->id}}">{{$tipoEntrega->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="w-1/2">
                        <div class="w-full mb-4">
                            <span>Cliente</span>
                            <select class="select">
                                <option></option>
                                @foreach ($clientes as $cliente)
                                <option value="{{$cliente->id}}">{{ $cliente->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="w-full mb-4">
                            <span>Vendedor:</span>
                            <select class="select">
                                <option></option>
                                @foreach ($vendedores as $vendedor)
                                <option value="{{$vendedor->id}}">{{$vendedor->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="w-full">

                    <div class="mx-4 my-4 ">
                        <x-jet-input
                            class="w-5/6 border"
                            placeholder="Buscar producto por nombre, Codigo"
                            wire:model="buscarProducto"
                            wire:keydown.enter="buscar_producto"
                        />
                        @if($productos)
                            <select class="w-5/6 select overflow-hidden" size="3">
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}">{{$producto->nombre}}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>

                </div>


            </div>
        </div>
    </div>
</div>
