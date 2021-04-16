@extends("theme.$theme.layout")

@section('titulo')
    Compras
@endsection
@section('scripts')
    <script src="{{asset("assets/pages/scripts/produccion/compras/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
    <div class="content-header">
        @include('includes.form-error')
        @include('includes.mensaje')
        @include('produccion.compra.item')
    </div>
@endsection