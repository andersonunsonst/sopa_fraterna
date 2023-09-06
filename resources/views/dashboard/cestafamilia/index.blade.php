@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="animated fadeIn">
    <div class="callout callout-info">
        <h5><i class="fas fa-info"></i> Cestas vinculadas</h5>
    </div>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-group">
          @foreach($cestas as $cesta)
           <li class="list-group-item">
            {{$cesta->tipo_cesta}}
           </li>
          @endforeach
          </ul>
        </div>
    

    </div>
    </form>
    </div>
</div>

@endsection


@section('javascript')

@endsection