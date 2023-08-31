@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Alimentos</h5>
        <a href="{{url('alimento/create')}}" class="btn btn-info" role="button">Novo alimento</a>
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
                    <th>Quantidade</th>
                    <th>Tipo</th>
                    <th>Validade</th>
                    <th></th>
        
                    </tr>
                </thead>
                <tbody>
                    @foreach($alimentos as $alimento)
                    <tr>
                        <td>{{ $alimento->nome }}</td>
                        <td>{{ $alimento->quantidade }}</td>
                        <td>{{ $alimento->tipo_quantidade }}</td>
                        <td>{{ \Carbon\Carbon::parse($alimento->validade)->format('d/m/Y')}}</td>
                        <td>
                        <a href="{{ url('/alimento/' . $alimento->id) }}" class="btn btn-block btn-primary">View</a>
                        </td>
                        <td>
                        <a href="{{ url('/alimento/' . $alimento->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                        </td>
                        <td>
                   
                        <form action="{{ route('alimento.destroy', $alimento->id ) }}" method="POST">
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