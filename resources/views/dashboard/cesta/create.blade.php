@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>Montar nova cesta  </div>
                    <div class="card-body">
                        <br>
                        <form method="POST" action="/cesta">
                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label>Alimentos</label>
                                <select name="alimento_id[]" multiple>
                                    @foreach ($alimentos as $key=>$alimento)
                                        <option value="{{$key}}">{{$alimento}}</option>
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