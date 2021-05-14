@extends('layouts.plantilla')

@section('content')

    <section class="testimonials section-bg ">
        <div class="container p-5">

            <div class="section-title">
                <h2>Editar Dispositivo #{{ $dev->id }}</h2>

                <div class="container">
                    <div class="container my-3">
                        {!! Form::model($dev,['route' => ['devices.update', $dev->id], 'method'=>'put']) !!}
                        <div class="form-group mb-3">
                            {!! Form::hidden('users_id', Auth()->user()->id, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group mb-3">
                            {!! Form::label('device_types_id', 'Seleccione el tipo de dispositivo', ['class' => 'form-label']) !!}
                            {!! Form::select('device_types_id', $dt->pluck('description','id'), null, ['class' => 'form-control']) !!}
                            @error('device_types_id')
                                <span class="text-danger">Este campo es requerido</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            {!! Form::label('serial', 'Digite el serial del dispositivo', ['class' => 'form-label']) !!}
                            {!! Form::text('serial', null, ['class' => 'form-control']) !!}
                            @error('serial')
                                <span class="text-danger">Este campo es requerido</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            {!! Form::label('location', 'Digite la ubicación del dispositivo', ['class' => 'form-label']) !!}
                            {!! Form::text('location', null, ['class' => 'form-control']) !!}
                            @error('location')
                                <span class="text-danger">Este campo es requerido</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            {!! Form::label('state', 'Seleccione el tipo de dispositivo', ['class' => 'form-label']) !!}
                            {!! Form::select('state', ['1'=>'Activo','0'=>'Inactivo'], 1, ['class' => 'form-control']) !!}
                            @error('state')
                                <span class="text-danger">Este campo es requerido</span>
                            @enderror
                        </div>

                        <div>
                            <a href="{{ route('devices.index') }}" class="btn btn-info">Volver</a>

                            {!! Form::submit('Registrar Dispositivo', ['class' => 'btn btn-success', 'form-control']) !!}
                        </div>



                        {!! Form::close() !!}
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
