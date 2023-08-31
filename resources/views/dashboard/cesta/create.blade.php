@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>  </div>
                    <div class="card-body">
                        <br>
                        <form method="POST" action="/colaborador">
                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label>Familias</label>
                                <select name="familia_id">
                                    @foreach ($familias as $key=>$familia)
                                        <option value="{{$key}}">{{$familia}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Tipo Cesta</label>
                                <select name="tipo_cesta">
                                   
                                        <option value="pequena">Pequena</option>
                                        <option value="media">Média</option>
                                        <option value="grande">Grande</option>
                                </select>
                            </div>

     


                            <button class="btn btn-block btn-success" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

@endsection