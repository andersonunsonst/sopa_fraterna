@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> cestas</h5>
        <a href="{{url('cesta/create')}}" class="btn btn-info" role="button">Novo cesta</a>
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
                    <th>Familia</th>
                    <th>Tipo Cesta</th>
     
                    <th></th>
        
                    </tr>
                </thead>
                <tbody>
                    @foreach($cestas as $cesta)
                    <tr>
                        <td>{{ $cesta->familia->nome }}</td>
                        <td>{{ $cesta->tipo_cesta }}</td>
                  
                        <td>
                        <a href="{{ url('/cesta/' . $cesta->id) }}" class="btn btn-block btn-primary">View</a>
                        </td>
                        <td>
                        <a href="{{ url('/cesta/' . $cesta->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                        </td>
                        <td>
                   
                        <form action="{{ route('cesta.destroy', $cesta->id ) }}" method="POST">
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