@extends('layouts.menu')

@section('title', $area->nombre .' | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>

    </style>
@endsection

@section('contenido-central')
<div class="tarjeta">
    <div class="card col-md-6">
        <div class="card-title btn btn-primary">
            Area
        </div>
        <div class="card-body">
            <span class="detalle">
                <h6 class="item">Nombre:</h6>
                <p class="item">{{ $area->nombre }}</p>
            </span>
            <span class="detalle">
                <h6 class="item">Código:</h6>
                <p class="item">{{ $area->codigo }}</p>
            </span>
            <span class="detalle">
                <h6 class="item">Departamento:</h6>
                <p class="item">{{ $area->departamento->nombre }}</p>
            </span>
            <span class="detalle">
                <h6 class="item col-md-4">Estado: </h6>
                <p class="item col-md-8">
                @if($area->estado == 1)
                    Activo
                @else
                    Inactivo
                @endif
                </p>
                
            </span>
        </div>
        <div class=" text-muted">
            Código: {{ $area->id }} 
        </div>
    </div>
</div>
@endsection