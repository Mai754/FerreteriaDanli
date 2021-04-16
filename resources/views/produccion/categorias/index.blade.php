@extends("theme.$theme.layout")

@section('titulo')
    Categorias
@endsection
@section("scripts")
    <script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection
@section('contenido')
    <div class="content-header">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="card card-info">        
            <div class="card-body">
                <section class="content">
                    <div class="row">


                        <div class="col-md-3">
                            <div class="card card-widget card-info">
                              <div class="card-header">
                                <div class="user-block">
                                  <span class="username">Jonathan Burke Jr</span>
                                  <span class="description"></span>
                                </div>
                                
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                              </div>

                              <div class="card-body">
                                <img class="img-fluid pad" src="{{asset("assets/$theme/dist/img/photo2.png")}}" alt="Photo">
                                <p>I took this photo this morning. What do you guys think?</p>
                                <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-eye"></i> Ver</button>
                              </div>
                            </div>
                        </div>


                        
                        <div class="col-md-3">
                            <div class="card card-widget card-info">
                              <div class="card-header">
                                <div class="user-block">
                                  <span class="username">Jonathan Burke Jr</span>
                                  <span class="description"></span>
                                </div>
                                
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                              </div>

                              <div class="card-body">
                                <img class="img-fluid pad" src="{{asset("assets/$theme/dist/img/photo2.png")}}" alt="Photo">
                                <p>I took this photo this morning. What do you guys think?</p>
                                <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-eye"></i> Ver</button>
                              </div>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="card card-widget card-info">
                              <div class="card-header">
                                <div class="user-block">
                                  <span class="username">Jonathan Burke Jr</span>
                                  <span class="description"></span>
                                </div>
                                
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                              </div>

                              <div class="card-body">
                                <img class="img-fluid pad" src="{{asset("assets/$theme/dist/img/photo2.png")}}" alt="Photo">
                                <p>I took this photo this morning. What do you guys think?</p>
                                <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-eye"></i> Ver</button>
                              </div>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="card card-widget card-info">
                              <div class="card-header">
                                <div class="user-block">
                                  <span class="username">Jonathan Burke Jr</span>
                                  <span class="description"></span>
                                </div>
                                
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                              </div>

                              <div class="card-body">
                                <img class="img-fluid pad" src="{{asset("assets/$theme/dist/img/photo2.png")}}" alt="Photo">
                                <p>I took this photo this morning. What do you guys think?</p>
                                <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-eye"></i> Ver</button>
                              </div>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="card card-widget card-info">
                              <div class="card-header">
                                <div class="user-block">
                                  <span class="username">Jonathan Burke Jr</span>
                                  <span class="description"></span>
                                </div>
                                
                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                              </div>

                              <div class="card-body">
                                <img class="img-fluid pad" src="{{asset("assets/$theme/dist/img/photo2.png")}}" alt="Photo">
                                <p>I took this photo this morning. What do you guys think?</p>
                                <button type="button" class="btn btn-outline-info btn-sm"><i class="fas fa-eye"></i> Ver</button>
                              </div>
                            </div>
                        </div>


                    </div>
                </section>
            </div>   
        </div>   
    </div>
@endsection