@extends("theme.$theme.layout")
@section("titulo")
    Inicio
@endsection
@section('contenido')
<section class="content">
    <div class="content-header">
      @include('includes.mensaje')
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3>0</h3>

              <p>Nueva Orden</p>
            </div>
            <div class="icon">
              <i class="fa fa-cart-plus"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>0<sup style="font-size: 20px">%</sup></h3>

              <p>Porcentanje de Robote</p>
            </div>
            <div class="icon">
              <i class="fa fa-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>0</h3>

              <p>Registros de Usuarios</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-pink">
            <div class="inner">
              <h3>0</h3>

              <p>Visitantes Unicos</p>
            </div>
            <div class="icon">
              <i class="fas fa-chart-pie mr-1"></i>
            </div>
            <a href="#" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable ui-sortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
              <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Ventas
              </h3>
              <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                  <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Rosquilla</a>
                  </li>
                </ul>
              </div>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="revenue-chart-canvas" height="375" style="height: 300px; display: block; width: 816px;" width="1020" class="chartjs-render-monitor"></canvas>
                 </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                  <canvas id="sales-chart-canvas" height="0" style="height: 0px; display: block; width: 0px;" width="0" class="chartjs-render-monitor"></canvas>
                </div>
              </div>
            </div><!-- /.card-body -->
          </div>

          <!-- TO DO List -->
          <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
              <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                Lista de Quehaceres
              </h3>

              <div class="card-tools">
                <ul class="pagination pagination-sm">
                  <li class="page-item"><a href="#" class="page-link">«</a></li>
                  <li class="page-item"><a href="#" class="page-link">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link">»</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
              <ul class="todo-list ui-sortable" data-widget="todo-list">
                <li class="done">
                  <span class="handle ui-sortable-handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span>
                  <div class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo2" id="todoCheck2" checked="">
                    <label for="todoCheck2"></label>
                  </div>
                  <span class="text">Hacer el tema responsive</span>
                  <small class="badge badge-info"><i class="far fa-clock"></i> 4 horas</small>
                  <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash"></i>
                  </div>
                </li>
              </ul>
            </div>
            
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Agregar item</button>
            </div>
          </div>
          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable ui-sortable">

          <!-- Map card -->
          <div class="card bg-gradient-primary">
            <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
              <h3 class="card-title">
                <i class="fas fa-map-marker-alt mr-1"></i>
                Visitantes
              </h3>
              <!-- card tools -->
              <div class="card-tools">
                <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                  <i class="far fa-calendar-alt"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body">
            </div>
            <!-- /.card-body-->
            <div class="card-footer bg-transparent">
              <div class="row">
                <div class="col-4 text-center">
                  <div id="sparkline-1"><canvas width="100" height="62" style="width: 80px; height: 50px;"></canvas></div>
                  <div class="text-white">Visitantes</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <div id="sparkline-2"><canvas width="100" height="62" style="width: 80px; height: 50px;"></canvas></div>
                  <div class="text-white">En Linea</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <div id="sparkline-3"><canvas width="100" height="62" style="width: 80px; height: 50px;"></canvas></div>
                  <div class="text-white">Ventas</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.card -->

          <!-- solid sales graph -->
          <div class="card bg-gradient-info">
            <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
              <h3 class="card-title">
                <i class="fas fa-th mr-1"></i>
                Grafica de Ventas
              </h3>

              <div class="card-tools">
                <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
              <canvas class="chart chartjs-render-monitor" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 816px;" width="1020" height="312"></canvas>
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-transparent">
              <div class="row">
                <div class="col-4 text-center">
                  <div style="display:inline;width:60px;height:60px;"><canvas width="75" height="75" style="width: 60px; height: 60px;"></canvas><input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>

                  <div class="text-white">Adomicilio</div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <div style="display:inline;width:60px;height:60px;"><canvas width="75" height="75" style="width: 60px; height: 60px;"></canvas><input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>

                  <div class="text-white">En Linea </div>
                </div>
                <!-- ./col -->
                <div class="col-4 text-center">
                  <div style="display:inline;width:60px;height:60px;"><canvas width="75" height="75" style="width: 60px; height: 60px;"></canvas><input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgcolor="#39CCCC" readonly="readonly" style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;"></div>

                  <div class="text-white">En Tienda</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->

          <!-- Calendar -->
          <div class="card bg-gradient-info">
            <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

              <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendario
              </h3>
              <!-- tools card -->
              <div class="card-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-maroon btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                    <i class="fas fa-bars"></i>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a href="#" class="dropdown-item">Nuevo Evento</a>
                    <a href="#" class="dropdown-item">Borrar Evento</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">Ver calendario</a>
                  </div>
                </div>
                <button type="button" class="btn btn-maroon btn-sm" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
              <!--The calendar -->
              <div id="calendar" style="width: 100%">
                <div class="bootstrap-datetimepicker-widget usetwentyfour">
                  <ul class="list-unstyled"><li class="show"><div class="datepicker">
                    <div class="datepicker-days" style=""><table class="table table-sm">
                      <thead>
                        <tr>
                          <th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month">
                            </span>
                          </th>
                          <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">
                            March 2021
                          </th>
                          <th class="next" data-action="next">
                            <span class="fa fa-chevron-right" title="Next Month"></span>
                          </th>
                        </tr>
                        <tr>
                          <th class="dow">Su</th>
                          <th class="dow">Mo</th>
                          <th class="dow">Tu</th>
                          <th class="dow">We</th>
                          <th class="dow">Th</th>
                          <th class="dow">Fr</th>
                          <th class="dow">Sa</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-action="selectDay" data-day="02/28/2021" class="day old weekend">28</td>
                          <td data-action="selectDay" data-day="03/01/2021" class="day">1</td>
                          <td data-action="selectDay" data-day="03/02/2021" class="day">2</td>
                          <td data-action="selectDay" data-day="03/03/2021" class="day">3</td>
                          <td data-action="selectDay" data-day="03/04/2021" class="day">4</td>
                          <td data-action="selectDay" data-day="03/05/2021" class="day active today">5</td>
                          <td data-action="selectDay" data-day="03/06/2021" class="day weekend">6</td>
                        </tr>
                        <tr>
                          <td data-action="selectDay" data-day="03/07/2021" class="day weekend">7</td>
                          <td data-action="selectDay" data-day="03/08/2021" class="day">8</td>
                          <td data-action="selectDay" data-day="03/09/2021" class="day">9</td>
                          <td data-action="selectDay" data-day="03/10/2021" class="day">10</td>
                          <td data-action="selectDay" data-day="03/11/2021" class="day">11</td>
                          <td data-action="selectDay" data-day="03/12/2021" class="day">12</td>
                          <td data-action="selectDay" data-day="03/13/2021" class="day weekend">13</td>
                        </tr>
                        <tr><td data-action="selectDay" data-day="03/14/2021" class="day weekend">14</td>
                          <td data-action="selectDay" data-day="03/15/2021" class="day">15</td>
                          <td data-action="selectDay" data-day="03/16/2021" class="day">16</td>
                          <td data-action="selectDay" data-day="03/17/2021" class="day">17</td>
                          <td data-action="selectDay" data-day="03/18/2021" class="day">18</td>
                          <td data-action="selectDay" data-day="03/19/2021" class="day">19</td>
                          <td data-action="selectDay" data-day="03/20/2021" class="day weekend">20</td>
                        </tr>
                        <tr>
                          <td data-action="selectDay" data-day="03/21/2021" class="day weekend">21</td>
                          <td data-action="selectDay" data-day="03/22/2021" class="day">22</td>
                          <td data-action="selectDay" data-day="03/23/2021" class="day">23</td>
                          <td data-action="selectDay" data-day="03/24/2021" class="day">24</td>
                          <td data-action="selectDay" data-day="03/25/2021" class="day">25</td>
                          <td data-action="selectDay" data-day="03/26/2021" class="day">26</td>
                          <td data-action="selectDay" data-day="03/27/2021" class="day weekend">27</td>
                        </tr>
                        <tr>
                          <td data-action="selectDay" data-day="03/28/2021" class="day weekend">28</td>
                          <td data-action="selectDay" data-day="03/29/2021" class="day">29</td>
                          <td data-action="selectDay" data-day="03/30/2021" class="day">30</td>
                          <td data-action="selectDay" data-day="03/31/2021" class="day">31</td>
                          <td data-action="selectDay" data-day="04/01/2021" class="day new">1</td>
                          <td data-action="selectDay" data-day="04/02/2021" class="day new">2</td>
                          <td data-action="selectDay" data-day="04/03/2021" class="day new weekend">3</td>
                        </tr>
                        <tr>
                          <td data-action="selectDay" data-day="04/04/2021" class="day new weekend">4</td>
                          <td data-action="selectDay" data-day="04/05/2021" class="day new">5</td>
                          <td data-action="selectDay" data-day="04/06/2021" class="day new">6</td>
                          <td data-action="selectDay" data-day="04/07/2021" class="day new">7</td>
                          <td data-action="selectDay" data-day="04/08/2021" class="day new">8</td>
                          <td data-action="selectDay" data-day="04/09/2021" class="day new">9</td>
                          <td data-action="selectDay" data-day="04/10/2021" class="day new weekend">10</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="datepicker-months" style="display: none;">
                    <table class="table-condensed"><thead><tr><th class="prev" data-action="previous">
                      <span class="fa fa-chevron-left" title="Previous Year"></span>
                    </th>
                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2021</th>
                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="7">
                      <span data-action="selectMonth" class="month">Jan</span>
                      <span data-action="selectMonth" class="month">Feb</span>
                      <span data-action="selectMonth" class="month active">Mar</span>
                      <span data-action="selectMonth" class="month">Apr</span>
                      <span data-action="selectMonth" class="month">May</span>
                      <span data-action="selectMonth" class="month">Jun</span>
                      <span data-action="selectMonth" class="month">Jul</span>
                      <span data-action="selectMonth" class="month">Aug</span>
                      <span data-action="selectMonth" class="month">Sep</span>
                      <span data-action="selectMonth" class="month">Oct</span>
                      <span data-action="selectMonth" class="month">Nov</span>
                      <span data-action="selectMonth" class="month">Dec</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="datepicker-years" style="display: none;">
              <table class="table-condensed">
                <thead>
                  <tr>
                    <th class="prev" data-action="previous">
                      <span class="fa fa-chevron-left" title="Previous Decade"></span>
                    </th>
                    <th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th>
                    <th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="7">
                      <span data-action="selectYear" class="year old">2019</span>
                      <span data-action="selectYear" class="year">2020</span>
                      <span data-action="selectYear" class="year active">2021</span>
                      <span data-action="selectYear" class="year">2022</span>
                      <span data-action="selectYear" class="year">2023</span>
                      <span data-action="selectYear" class="year">2024</span>
                      <span data-action="selectYear" class="year">2025</span>
                      <span data-action="selectYear" class="year">2026</span>
                      <span data-action="selectYear" class="year">2027</span>
                      <span data-action="selectYear" class="year">2028</span>
                      <span data-action="selectYear" class="year">2029</span>
                      <span data-action="selectYear" class="year old">2030</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="datepicker-decades" style="display: none;">
              <table class="table-condensed">
                <thead>
                  <tr>
                    <th class="prev" data-action="previous">
                      <span class="fa fa-chevron-left" title="Previous Century"></span>
                    </th>
                    <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th>
                    <th class="next" data-action="next">
                      <span class="fa fa-chevron-right" title="Next Century">
                        </span>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="7">
                        <span data-action="selectDecade" class="decade old" data-selection="2006">1990</span>
                        <span data-action="selectDecade" class="decade" data-selection="2006">2000</span>
                        <span data-action="selectDecade" class="decade active" data-selection="2016">2010</span>
                        <span data-action="selectDecade" class="decade active" data-selection="2026">2020</span>
                        <span data-action="selectDecade" class="decade" data-selection="2036">2030</span>
                        <span data-action="selectDecade" class="decade" data-selection="2046">2040</span>
                        <span data-action="selectDecade" class="decade" data-selection="2056">2050</span>
                        <span data-action="selectDecade" class="decade" data-selection="2066">2060</span>
                        <span data-action="selectDecade" class="decade" data-selection="2076">2070</span>
                        <span data-action="selectDecade" class="decade" data-selection="2086">2080</span>
                        <span data-action="selectDecade" class="decade" data-selection="2096">2090</span>
                        <span data-action="selectDecade" class="decade old" data-selection="2106">2100</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </li>
          <li class="picker-switch accordion-toggle">
            </li>
          </ul>
        </div>
        </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endsection
