<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <title>{{ config('app.name', 'GUARDA CIVIL MUNICIPAL DE CACHOEIRO DE ITAPEMIRIM - ES') }}</title>

        <!-- Fonts -->
        
        
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <link href="/css/login.css" rel="stylesheet" type="text/css">
     
        <!-- Javascript -->
        <script src="/js/app.js"></script>
        <script src="/js/login.js"></script>

    </head>
    <body>
        
  
@auth

@else

<div class="container">
    <div class="row justify-content-center">
        <p class="form-signin-heading text-center">GUARDA CIVIL MUNICIPAL DE CACHOEIRO DE ITAPEMIRIM - ES</p>
    </div>




<ul class="nav nav-pills mb-3 row justify-content-center" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-public-data-tab" data-toggle="pill" href="#pills-public-data" role="tab" aria-controls="pills-public-data-tab" aria-selected="true">DADOS PÚBLICOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">DADOS PRIVADOS</a>
  </li>
</ul>

<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-public-data" role="tabpanel" aria-labelledby="pills-public-data-tab">
  
    <div class="row justify-content-center">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
            
            <label for="matricula" >Matrícula</label>
            <input type="text" id="matricula" name="matricula" class="form-control text-center" placeholder="Digite sua matrícula" required autofocus>
           

            
            @if ($errors->all())
            <div class="alert alert-danger" role="alert">
                <strong>Matrícula inválida!</strong>
            </div>
            @endif

            <div class="form-group">
                <button class="btn btn-md btn-primary" type="submit">ACESSAR INFORMAÇÕES</button>
                <small id="emailHelp" class="form-text text-muted">Acesse os dados públicos sem senha</small>
            </div>            
        </form>
    </div>  
  </div>


  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="row justify-content-center">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
                
            <label for="matricula" >Matrícula</label>
            <input type="text" id="matricula" name="matricula" class="form-control text-center" placeholder="Digite sua matrícula" required autofocus>
            
            @if ($errors->all())
            <div class="alert alert-danger" role="alert">
                <strong>Matrícula inválida!</strong>
            </div>
            @endif

            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" class="form-control text-center" placeholder="Senha de acesso" required>
                <button class="btn btn-md btn-primary" type="submit">ACESSAR INFORMAÇÕES</button>
            </div>                     
        </form>
    </div>
  </div>


  
</div>


   



   
  </div>








        
    </div>

</div> 
<!-- /container -->

@endauth


    </body>
</html>
