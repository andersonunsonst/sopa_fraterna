@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> cestas</h5>
        <a href="{{url('cesta/create')}}" class="btn btn-info" role="button">Nova cesta</a>
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
                    <th>Id</th>
                    <th>Tipo Cesta</th>
     
                    <th></th>
        
                    </tr>
                </thead>
                <tbody>
                    @foreach($cestas as $cesta)
                    <tr>
                        <td>{{ $cesta->id }}</td>
                        <td>{{ $cesta->tipo_cesta }}</td>
                  
                        <td>
                      
                        </td>
                        <td>
                      
                        </td>
                        <td>
                   
                        <form action="{{ route('cesta.destroy', $cesta->id ) }}" method="POST">
                            @method('DELETE')
                            @csrf
             
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