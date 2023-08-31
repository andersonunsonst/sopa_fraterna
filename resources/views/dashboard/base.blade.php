<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Sopa Fraterna">
    <meta name="author" content="Anderson Unsonst">
    <title>Sopa Fraterna</title>


    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets/dashboard/footer.css')}}">
    @yield('css')

  </head>

  <body >
    <div>

        <div class="container-fluid">
         
            <main >
       
                <div class="row">
                    <div class="col-2">
                        @include('dashboard.componentes.menu')
                    </div>
                    <div class="col-10">
                        @yield('content') 
                    </div>
                </div>
             
            </main>
            @include('dashboard.componentes.footer')
        </div>
    </div>

    @yield('javascript')

  </body>
</html> 
