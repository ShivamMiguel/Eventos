<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


        <!-- CSS do bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">

        <!--fontes do google -->
 
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/CSS/styles.css">
        <script src=""></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                    <img src="/img/logo eventos.png" alt="">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>

                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>

                    <ul class="navbar-nav">

                    @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Meus eventos</a>
                    </li>

                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" 
                            onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                        </form>

                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>

                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                    @endguest

                </ul>
                </div>

        </header>



       <main>
           <div class="container-fluid">
               <div class="row">
                    @if(session('msg'))

                    <p class="msg"> {{session ('msg') }} </p>

                    @endif
                   @yield('content')
               </div>
           </div>
      </main>

      <footer>

        <p>Eventos é uma aplicação web com objectivo de criar uma agenda para o controle do seu evento</p>
        <p>  Eventos &copy;2021 Desenvolvido por António Gonga Miguel</p>

     </footer>
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script
    </body>
</html>
