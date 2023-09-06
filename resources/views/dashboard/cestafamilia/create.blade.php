@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>  Cadastro de membros</div>
                    <div class="card-body">
                        <br>
                        <form method="POST" action="/familia/{{$familia_id}}/membro">
                            @csrf
                            @method('POST')
                            <input class="hidden" type="hidden" name="familia_id" value="{{$familia_id}}">

                            <div class="form-group">
                                <label>Nome</label>
                                <input class="form-control" type="text" placeholder="Nome" name="nome" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Idade</label>
                                <input class="form-control" type="text" placeholder="Idade" name="idade" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Parentesco</label>
                                <input class="form-control" type="text" placeholder="parentesco" name="parentesco" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" placeholder="E-mail" name="email" required>
                            </div>

                            <div class="form-group">
                                <label>Telefone</label>
                                <input class="form-control" type="text" placeholder="Telefone" name="telefone" required>
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