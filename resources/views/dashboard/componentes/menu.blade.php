<link rel="stylesheet" type="text/css"  href="{{asset('assets/dashboard/menu.css')}}" />
<aside class="main-sidebar sidebar-dark-primary">
<nav class="mt-2">  
<ul id="nav" class="nav nav-pills nav-sidebar flex-column">
    <li><a href="{{route('usuarios')}}">Usuários</a>

    </li>
    <li><a href="{{route('colaborador')}}">Colaboradores</a></li>
    <li><a href="{{route('alimento')}}">Alimentos</a></li>
    <li><a href="{{route('familia')}}">Familias</a>
      <!-- <ul>
        <li><a href="#"> membros</a></li>
      </ul> -->
    </li>

    <li><a href="#">Cesta Básica</a>
    <ul>
      <li> 
        <a href="{{route('create_cesta')}}">Montar cesta </a>
      </li>
      <li> 
        <a href="{{route('cesta')}}">Vincular Familia </a>
      </li>
    </ul>
  </li>
</ul>
</nav>
</aside>