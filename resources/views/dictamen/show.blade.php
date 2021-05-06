@extends('adminlte::page')

@section('title', 'Ver Dictamen ')

@section('content_header')
    <div class="container">
        <h1 class="mb-3"><b>Ver dictamen</b></h1>
    </div>
@stop

@section('content')
<main role="main" class="container">
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-success rounded shadow-sm">
      <div class="lh-100">
        <h6 class="mb-0 text-white lh-100">Dictamen {{$dictamen->nro_dictamen}}</h6>
        {{-- <small>Since 2011</small> --}}
      </div>
    </div>
  
    <div class="my-3 p-3 bg-white rounded shadow-sm">
      <h6 class="border-bottom border-gray pb-2 mb-0">Información detallada</h6>
      <div class="media text-muted pt-3">
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark">Número de expediente</strong>
          {{ $dictamen->expediente }}
        </p>
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark">Número de dictamen</strong>
          {{ $dictamen->nro_dictamen }}
        </p>
      </div>
      <div class="media text-muted pt-3">
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark">Asunto</strong>
          {{ $dictamen->asunto }}
        </p>
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark">Monto</strong>
          {{ $dictamen->monto }}
        </p>
      </div>
      <div class="media text-muted pt-3">
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark">Fecha de ingreso</strong>
          {{ date('d/m/Y', strtotime($dictamen->fecha_ingreso)) }}
        </p>
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <strong class="d-block text-gray-dark">Fecha de salida</strong>
          {{ date('d/m/Y', strtotime($dictamen->fecha_salida)) }}
        </p>
      </div>
    <div class="d-flex mt-3 justify-content-between align-items-center w-100">
        <a href="{{ route('dictamen.index', $dictamen->id) }}" style="color: white" class="btn btn-success far fa-arrow-alt-circle-left" title="Volver"> <b>Volver al inicio</b></a>
        <div class="action-buttons">
          <a href="{{ route('dictamen.edit', $dictamen->id) }}" style="color: white;" class="btn btn-info fas fa-edit" title="Editar"></a>
          <form action="{{ route('dictamen.destroy', $dictamen->id) }}" method="POST" style="display: inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger fas fa-trash-alt" title="Eliminar" onclick="return confirm('Eliminar registro?')"></a>
          </form>
        </div>
    </div>
    </div>
</main>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

    @if(Session::has('success'))
    <script>
    toastr.success("{!! Session::get('success') !!}");
    </script>
    @endif
@stop