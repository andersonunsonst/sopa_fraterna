@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>  {{ $user->name }}</div>
                    <div class="card-body">
                        <br>
                        <form method="POST" action="/usuarios/{{ $user->id }}">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label>Nome</label>
                                <input class="form-control" type="text" placeholder="Nome" name="name" value="{{$user->name}}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" placeholder="E-mail" name="email" value="{{$user->email}}" required>
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