<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    body {
      margin-top: 50px;
      display: flex;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      background-color: #ffffff;
    }

    aside {
      width: 50px;
      height: 100vh; /* Assurez-vous que la barre latérale occupe toute la hauteur de la fenêtre */
      background-color: #f0f0f0;
    }
    .col{
      margin: auto;
    } 
    
    main {
      margin-left: 250px;
      margin-top: 100px;
      width: 100%;
      margin: center;
    }
    .pricing-header {
    margin-top: 150px; /* Ajoutez la valeur souhaitée de margin-top (par exemple, 50px) */
  }
    
    </style>
  <title>Document</title>
</head>
<body>
  @include('header')
  
    <div class="d-flex">
      <aside style="margin-top: 200px;">
        @include('sidebar')
      </aside>

      <main>
        @section('title', 'Titre de la Page')
        @yield('content')
      </main>
    </div>
</body>
</html>

@extends('base')

@section('content')
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">PlastiMad</font></font></h1>
    <p class="fs-5 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Discover our exceptional range of innovative plastic products that will simplify your everyday life and add a touch of sustainability to your lifestyle. Discover our selection today for practical, eco-friendly solutions just a click away</font></font></p>
</div>

@php
$chunkedPosts = $posts->chunk(3); // Divisez les posts en groupes de 3
@endphp

@foreach($chunkedPosts as $chunk)
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    @foreach($chunk as $post)
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <img src="{{ $post->image }}" alt="{{ $post->nomarticle }}">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $post->typearticle }}</font></font></h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $post->prix }}Ar </font></font><small class="text-muted fw-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">/pieces</font></font></small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $post->nomarticle }}</font></font></li>
            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $post->description }}</font></font></li>
          </ul>
          <a href="/auth/client/client_login">Acheter</a>
        </div>
      </div>
    </div>
    @endforeach
</div>
@endforeach
@include('footer')
{{ $posts->links() }}
@endsection








