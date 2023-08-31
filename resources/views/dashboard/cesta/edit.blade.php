@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>  {{ $colaborador->name }}</div>
                    <div class="card-body">
                        <br>
                        <form method="POST" action="/colaborador/{{ $colaborador->id }}">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label>Alimentos</label>
                                <input class="form-control" type="text" placeholder="Nome" name="name" value="{{$colaborador->nome}}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" placeholder="E-mail" name="email" value="{{$colaborador->email}}" required>
                            </div>

                            <div class="form-group">
                                <label>Telefone</label>
                                <input class="form-control" type="text" placeholder="Telefone" name="telefone" value="{{$colaborador->telefone}}" required>
                            </div>

                            <div class="form-group">
                                <label>Rua</label>
                                <input class="form-control" type="text" placeholder="Rua" name="rua" value="{{$colaborador->rua}}" required>
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