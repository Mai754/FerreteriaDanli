@extends("theme.$theme.layout")

@section('titulo')
    Factura Compra
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
  <div class="content-header">
    <div class="card card-info" style="height: 590px;">
      <div class="card-header">
          <h3 class="card-title">Facturas de Compra</h3>
          <div class="card-tools pull-right">    
            <a href="{{route('crear_compras')}}" class="btn btn-info btn-sm">    
                <i class="fa fa-fw fa-plus-circle"></i> Nueva Compra
            </a>        
          </div>
      </div>
      
      <div class="card-body">
          
      </div>
    </div>
  </div>
@endsection