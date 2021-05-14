@extends('layouts.plantilla')

@section('content')
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <h1 class="p-5">GREEN CAMPUS</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <h5 class="card-header">Dispositivos</h5>
                        <div class="card-body">
                            <p class="card-text">Actualmente tienes {{ $devices->count() }} dispositivos registrados </p>
                            <a href="{{ route('devices.index') }}" class="btn btn-primary">Ver tus dispositivos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <h5 class="card-header">Consumos</h5>
                        <div class="card-body">
                            <p class="card-text">Se han calculado {{ $consumo->count('watts') }} Watts consumidos</p>
                            <a href="{{ route('consumptions.index') }}" class="btn btn-primary">Ver los resultados</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
