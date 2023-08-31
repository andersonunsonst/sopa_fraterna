@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Usuários</h5>
        <a href="{{url('usuarios/create')}}" class="btn btn-info" role="button">Novo Usuário</a>
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
                    <th>Username</th>
                    <th>E-mail</th>
                    <th></th>
        
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                        <a href="{{ url('/usuarios/' . $user->id) }}" class="btn btn-block btn-primary">View</a>
                        </td>
                        <td>
                        <a href="{{ url('/usuarios/' . $user->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                        </td>
                        <td>
                        @if( $you->id !== $user->id )
                        <form action="{{ route('usuarios.destroy', $user->id ) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-block btn-danger">Remover</button>
                        </form>
                        @endif
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