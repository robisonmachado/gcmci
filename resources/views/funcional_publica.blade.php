<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">
        $( document ).ready(function() {
            $('#exampleModal').modal({show:true});
        }); 

    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/funcional.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        
            <div class="container"> 
                
                <!-- MODAL DE INFORMAÇÃO -->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ATENÇÃO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Sistema em desenvolvimento
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                    </div>
                </div>
                </div>

                

                <!-- MODAL DE INFORMAÇÃO -->



                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">NOME</span>
                    </div>                    
                    <input type="text" value="{{ $usuario->name }}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" disabled>
                </div>
                
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">CARGO / POSTO / GRADUAÇÃO</span>
                    </div>                    
                    <input type="text" value="GUARDA CIVIL MUNICIPAL" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" disabled>
                </div> 
               

                <div class="input-group mb-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon2">MATRÍCULA</span>
                    </div>
                    <input type="text" value="{{ $usuario->matricula }}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" disabled>

                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">FATOR RH</span>
                    </div>
                    <input type="text" value="{{ $usuario->rh }}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" disabled>
                
                
                </div>                
                              
            </div>

        </main>
    </div>
</body>
</html>
