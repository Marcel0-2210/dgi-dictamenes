@extends('adminlte::page')

@section('title', 'Crear Dictamen')

@section('content_header')
    <div class="container">
        <h1 class="mb-3"><b>Crear dictamen</b></h1>
    </div>
@stop
    
    
@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex mb-3 justify-content-between align-items-center w-100">
                <a href="{{ route('dictamen.index') }}" style="color: white" class="btn btn-info far fa-arrow-alt-circle-left" title="Volver"> <b>Volver al inicio</b></a>
            </div>
            <div class="card ">
                <div class="card-header"><b>Formulario de carga</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('dictamen.store') }}">
                        @csrf

                        <div class="mb-3 row">
                            <div class="col-sm-6">
                                <label for="nro_dictamen" class="col-form-label">Nro dictamen</label>
                                <input type="text" class="form-control" id="nro_dictamen" name="nro_dictamen" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="expediente" class="col-form-label">Nro expediente</label>
                                <input type="text" class="form-control" id="expediente" name="expediente" required> 
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-sm-6">
                                <label for="asunto" class="col-form-label">Asunto</label>
                                <input type="text" class="form-control" id="asunto" name="asunto">
                            </div>

                            <div class="col-sm-6">
                                <label for="monto" class="col-form-label">Monto</label>
                                <input type="number" class="form-control" id="monto" name="monto" step="0.01" min="0" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-sm-6">
                                <label for="fecha_ingreso" class="col-form-label">Fecha de ingreso</label>
                                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
                            </div>

                            <div class="col-sm-6">
                                <label for="fecha_salida" class="col-form-label">Fecha de salida</label>
                                <input type="date" class="form-control" id="fecha_salida" name="fecha_salida" required>
                            </div>
                        </div>

                        <div class="mt-4 row">
                            <div class="col-sm-6">
                                <input type="submit" class="btn btn-success" value="Guardar">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop