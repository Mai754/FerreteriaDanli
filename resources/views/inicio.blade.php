@extends("theme.$theme.layout")
@section("titulo")
    Inicio
@endsection

@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/pages/scripts/admin/crear.js")}}" type="text/javascript"></script>

    <script src="{{asset("assets/pages/scripts/inicio/agenda.js")}}" type="text/javascript"></script>

    <script src="{{asset("assets/$theme/plugins/moment/moment.min.js")}}"></script>
    <script src="{{asset("assets/calendar/lib/main.js")}}"></script>
@endsection

@section('contenido')
  <div class="content-header">
    <div class="content" bis_skin_checked="1">
      
      <div class="container-fluid" bis_skin_checked="1">
        @include('includes.mensaje')
        <div class="row" bis_skin_checked="1">
          
          <div class="col-lg-6" bis_skin_checked="1">
            <div class="card" bis_skin_checked="1">
                <div class="card-body p-0">
                  <div id="calendar"></div>
                </div>
            </div>
  
            <div class="card" bis_skin_checked="1">
              <div class="card-header border-0" bis_skin_checked="1">
                <div class="d-flex justify-content-between" bis_skin_checked="1">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body" bis_skin_checked="1">
                <div class="d-flex" bis_skin_checked="1">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>Visitors Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Since last week</span>
                  </p>
                </div>
                <!-- /.d-flex -->
  
                <div class="position-relative mb-4" bis_skin_checked="1"><div class="chartjs-size-monitor" bis_skin_checked="1"><div class="chartjs-size-monitor-expand" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div><div class="chartjs-size-monitor-shrink" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div></div>
                  <canvas id="visitors-chart" height="250" width="715" style="display: block; height: 200px; width: 572px;" class="chartjs-render-monitor"></canvas>
                </div>
  
                <div class="d-flex flex-row justify-content-end" bis_skin_checked="1">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>
  
                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-lg-6" bis_skin_checked="1">
            <div class="card" bis_skin_checked="1">
              <div class="card-header border-0" bis_skin_checked="1">
                <div class="d-flex justify-content-between" bis_skin_checked="1">
                  <h3 class="card-title">Sales</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div>
              <div class="card-body" bis_skin_checked="1">
                <div class="d-flex" bis_skin_checked="1">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">$18,230.00</span>
                    <span>Sales Over Time</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 33.1%
                    </span>
                    <span class="text-muted">Since last month</span>
                  </p>
                </div>
                <!-- /.d-flex -->
  
                <div class="position-relative mb-4" bis_skin_checked="1"><div class="chartjs-size-monitor" bis_skin_checked="1"><div class="chartjs-size-monitor-expand" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div><div class="chartjs-size-monitor-shrink" bis_skin_checked="1"><div class="" bis_skin_checked="1"></div></div></div>
                  <canvas id="sales-chart" height="250" style="display: block; height: 200px; width: 572px;" width="715" class="chartjs-render-monitor"></canvas>
                </div>
  
                <div class="d-flex flex-row justify-content-end" bis_skin_checked="1">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                  </span>
  
                  <span>
                    <i class="fas fa-square text-gray"></i> Last year
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->
  
            <div class="card" bis_skin_checked="1">
              <div class="card-header border-0" bis_skin_checked="1">
                <h3 class="card-title">Online Store Overview</h3>
                <div class="card-tools" bis_skin_checked="1">
                  <a href="#" class="btn btn-sm btn-tool">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-tool">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body" bis_skin_checked="1">
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3" bis_skin_checked="1">
                  <p class="text-success text-xl">
                    <i class="ion ion-ios-refresh-empty"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-success"></i> 12%
                    </span>
                    <span class="text-muted">CONVERSION RATE</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center border-bottom mb-3" bis_skin_checked="1">
                  <p class="text-warning text-xl">
                    <i class="ion ion-ios-cart-outline"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                    </span>
                    <span class="text-muted">SALES RATE</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="d-flex justify-content-between align-items-center mb-0" bis_skin_checked="1">
                  <p class="text-danger text-xl">
                    <i class="ion ion-ios-people-outline"></i>
                  </p>
                  <p class="d-flex flex-column text-right">
                    <span class="font-weight-bold">
                      <i class="ion ion-android-arrow-down text-danger"></i> 1%
                    </span>
                    <span class="text-muted">REGISTRATION RATE</span>
                  </p>
                </div>
              </div>
            </div>
  
            <div class="card" bis_skin_checked="1">
              <div class="card-header border-0" bis_skin_checked="1">
                <h3 class="card-title">Products</h3>
                <div class="card-tools" bis_skin_checked="1">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0" bis_skin_checked="1">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Sales</th>
                    <th>More</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Some Product
                    </td>
                    <td>$13 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        12%
                      </small>
                      12,000 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Another Product
                    </td>
                    <td>$29 USD</td>
                    <td>
                      <small class="text-warning mr-1">
                        <i class="fas fa-arrow-down"></i>
                        0.5%
                      </small>
                      123,234 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Amazing Product
                    </td>
                    <td>$1,230 USD</td>
                    <td>
                      <small class="text-danger mr-1">
                        <i class="fas fa-arrow-down"></i>
                        3%
                      </small>
                      198 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                      Perfect Item
                      <span class="badge bg-danger">NEW</span>
                    </td>
                    <td>$199 USD</td>
                    <td>
                      <small class="text-success mr-1">
                        <i class="fas fa-arrow-up"></i>
                        63%
                      </small>
                      87 Sold
                    </td>
                    <td>
                      <a href="#" class="text-muted">
                        <i class="fas fa-search"></i>
                      </a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>
  
@endsection
