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
                                <label>Nome</label>
                                <input class="form-control" type="text" placeholder="Nome" name="nome" required autofocus>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" placeholder="E-mail" name="email" required>
                            </div>

                            <div class="form-group">
                                <label>Telefone</label>
                                <input class="form-control" type="text" placeholder="Telefone" name="telefone" required>
                            </div>

                            <div class="form-group">
                                <label>Rua</label>
                                <input class="form-control" type="text" placeholder="Rua" name="rua" required>
                            </div>

                            <div class="form-group">
                                <label>Número</label>
                                <input class="form-control" type="text" placeholder="Numero" name="numero" required>
                            </div>

                            <div class="form-group">
                                <label>Bairro</label>
                                <input class="form-control" type="text" placeholder="Bairro" name="bairro" required>
                            </div>

                            <div class="form-group">
                                <label>Cidade</label>
                                <input class="form-control" type="text" placeholder="Cidade" name="cidade"  required>
                            </div>

                            <div class="form-group">
                                <label>Estado</label>
                                <input class="form-control" type="text" placeholder="Estado" name="estado" required>
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