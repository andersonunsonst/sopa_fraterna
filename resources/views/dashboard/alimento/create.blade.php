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
                        <form method="POST" action="/alimento">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label>Nome</label>
                                <input class="form-control" type="text" placeholder="Nome" name="nome" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>Quantidade</label>
                                <input class="form-control" type="text" placeholder="Quantidade" name="quantidade" required>
                            </div>

                            <div class="form-group">
                                <label>Unidade de Peso</label>
                                <input class="form-control" type="text" placeholder="tipo_quantidade" name="tipo_quantidade" required>
                            </div>

                            <div class="form-group">
                                <label>Validade</label>
                                <input class="form-control" type="text" placeholder="Validade" name="validade"  required>
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