@extends('adminlte::page')

@section('title', 'Dictamenes Legales')

@section('content_header')
    <h1 class="mb-3"><b>Ver dictamenes</b></h1>
@stop

@section('content')

  <table class="table table-bordered table-responsive-sm" id="test">
    <thead class="table-dark text-center">
      <tr>
        <th scope="col">Nro de dictamen</th>
        <th scope="col">Nro de expediente</th>
        <th scope="col">Fecha de ingreso</th>
        <th scope="col">Fecha de salida</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody class="text-center">
      @foreach ($dictamenes as $dictamen)
      <tr>
        <td>{{ $dictamen->nro_dictamen }}</td>
        <td>{{ $dictamen->expediente }}</td>
        <td>{{ date('d/m/Y', strtotime($dictamen->fecha_ingreso)) }}</td>
        <td>{{ date('d/m/Y', strtotime($dictamen->fecha_salida)) }}</td>
        <td>
          <a href="{{ route('dictamen.show', $dictamen->id) }}" class="btn btn-success fas fa-eye" title="Ver"></a>
          <a href="{{ route('dictamen.edit', $dictamen->id) }}" class="btn btn-info fas fa-edit" title="Editar"></a>
          <a href="#" class="btn btn-danger fas fa-trash-alt" title="Eliminar"></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop

@section('css')
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
    {{-- <style>
      .main-header {
        z-index: 0;
      }
    </style> --}}
@stop

@section('js')
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

  @if(Session::has('success'))
   <script>
     toastr.success("{!! Session::get('success') !!}");
   </script>
  @endif
  
  <script>
      $(document).ready(function() {
          $('#test').DataTable( {
              "language": {
                  "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
              },
              "ordering": false
          } );
      } );
  </script>
  
@stop