
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{asset('assets/login/index.css')}}">

<form method="post" action="{{route('autenticar')}}">
     @csrf
     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="wrapper fadeInDown">
        <h1 class="title-primary text-purple">Sopa Fraterna</h1>
            <p>Essa é uma área exclusiva para colaboradores, informe seu e-mail e senha para continuar.</p>

        <div id="formContent">
        
            <div class="icon fadeIn first">
                <i class="bi bi-cup-hot-fill" style="font-size: 2rem; color: cornflowerblue;"></i>
            </div>

            <input type="text" id="login" class="fadeIn second" name="email" placeholder="E-mail">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="Senha">
            <input type="submit"  value="Entrar">
        

        </div>
    </div>
</form>