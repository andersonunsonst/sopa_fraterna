@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> membros</h5>
        <a href="{{url('membro/create')}}" class="btn btn-info" role="button">Nova membro</a>
    </div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="row">
        <div class="col-sm-12">

                
                <table class="table table-responsive-sm table-striped" >
                <thead>
                    <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($membros as $membro)
                    <tr>
                        <td>{{ $membro->nome }}</td>
                        <td>{{ $membro->telefone }}</td>
                        <td>{{ $membro->email }}</td>
                
                        <td>
                        <a href="{{ url('/membro/' . $membro->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                        </td>
                  
                        <td>
                   
                        <form action="{{ route('membro.destroy', $membro->id ) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-block btn-danger">Remover</button>
                        </form>
                    
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
    
        </div>
    </div>
    </div>
</div>

@endsection


@section('javascript')

@endsection