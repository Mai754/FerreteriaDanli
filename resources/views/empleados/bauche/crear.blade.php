@extends("theme.$theme.layout")

@section('titulo')
    Empleados
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
<div class="content-header">
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            
        @foreach ($buaches as $buache)
            <div class="invoice p-3 mb-3">
                <div class="row">
                    <div class="col-12">
                        <h4>
                            <i class="fas fa-globe"></i> FERRETERIA DANLI, Inc.
                        </h4>
                    </div>
                </div>

                <div class="row invoice-info">
                    <div class="col-sm-6 invoice-col">
                        <b>COMPROBANTE DE PAGO</b><br>
                        <b>RTN No. 07039017970784</b><br>
                        <br>
                        <b>ID Empleado: </b> {{$buache->DNI_empleado}}<br>
                        <b>Nombre: </b>{{$buache->primer_nombre}} {{$buache->segundo_nombre}} {{$buache->primer_apellido}} {{$buache->segundo_apellido}}<br>
                        <b>Periodo: </b> 968-34567
                    </div>

                    <div class="col-sm-6 invoice-col">
                        <br>
                        <br>
                        <br>
                        <br>
                        <b>Departamento: </b> {{$buache->Nombre_departamento}}<br>
                        <b>Puesto: </b> 968-34567
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <br>
                        <div class="table-responsive">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <th>INGRESOS</th>
                                        <th>Horas</th>
                                        <th>Lps.</th>
                                        <th>EGRESOS</th>
                                        <th>Lps.</th>
                                    </tr>
                                    <tr>
                                        <th> + Dias Trabajados</th>
                                        <td></th>
                                        <td></td>
                                        <th> - Prestamos</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th> + Comision por Ventas</th>
                                        <td></th>
                                        <td></td>
                                        <th></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th> + Pago por Labor</th>
                                        <td> 44 h</th>
                                        <td>{{$buache->sueldo_bruto}}</td>
                                        <th></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th> + Septimo Dia</th>
                                        <td></th>
                                        <td>{{$buache->septimo}}</td>
                                        <th></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th> + Incapacidades</th>
                                        <td></th>
                                        <td></td>
                                        <th></th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th> + Horas Extras</th>
                                        <td></th>
                                        <td></td>
                                        <th></th>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered">
                                <tr>
                                    <th>Desde: </th>
                                    <th>SUELDO</th>
                                    <th>INGRESOS</th>
                                    <th>EGRESOS</th>
                                    <th>PRESTAMO OTROGADO</th>
                                    <th>RECIBIDO</th>
                                </tr>
                                <tr>
                                    <th>Hasta: </th>
                                    <td>Lps. {{$buache->sueldo_bruto}}</td>
                                    <td>Lps. {{$buache->ingresos_neto}}</td>
                                    <td>Lps. </td>
                                    <td></td>
                                    <td>Lps. {{$buache->pago_neto}}</td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="row no-print">
                    <div class="col-12">
                        <a href="javascript:window.print();" id="imprimir" class="btn btn-info">
                            <i class="fas fa-print"></i> Imprimir
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</div>
@endsection