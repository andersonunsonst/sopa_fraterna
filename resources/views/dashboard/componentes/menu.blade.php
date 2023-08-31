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
        <li><a href="#"> familia 1</a></li>
        <li><a href="#">familia 2</a></li>
        <li><a href="#">familia 3</a></li>
        <li><a href="#">familia 4</a></li>
      </ul> -->
    </li>

    <li><a href="{{route('cesta')}}">Cesta Básica</a></li>
</ul>
</nav>
</aside>