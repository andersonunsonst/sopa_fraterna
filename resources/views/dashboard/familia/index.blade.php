@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Familias</h5>
        <a href="{{url('familia/create')}}" class="btn btn-info" role="button">Nova Familia</a>
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
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($familias as $familia)
                    <tr>
                        <td>{{ $familia->nome }}</td>
                        <td>{{ $familia->telefone }}</td>
                        <td>{{ $familia->email }}</td>
                
                        <td>
                        <a href="{{ url('/familia/' . $familia->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                        </td>
                        <td>
                        <a href="{{ url('/familia/' . $familia->id . '/membro/create') }}" class="btn btn-block btn-primary">Add Membro</a>
                        <a href="{{ url('/familia/' . $familia->id . '/membro') }}" class="btn btn-block btn-primary">Ver Membros</a>
                        </td>
                        <td>
                   
                        <form action="{{ route('familia.destroy', $familia->id ) }}" method="POST">
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