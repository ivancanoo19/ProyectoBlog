<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        <a href="{{ route('posts.create') }}">Crear Publicación | </a>
        <a href="{{ route('extras.musica') }}"> Música |</a>
        <a href="{{ route('posts.nacionales') }}"> Nacionales |</a>
        <a href="{{ route('posts.internacionales') }}"> Internacionales |</a>
        <a href="{{ route('posts.index') }}"> Lista publicaciones |</a>
    </h2>
        
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <h2>Proximos eventos...</h2>
    <!-- Carrusel de recetas destacadas -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselRecipes" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselRecipes" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselRecipes" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./imagenes/CarlaMorrisonEvent.png" class="d-block w-50 mx-auto" alt="">
        </div>
        <div class="carousel-item">
            <img src="./imagenes/CoronaCapital.png" class="d-block w-50 mx-auto" alt="">
        </div>
        <div class="carousel-item">
            <img src="./imagenes/CocaCola.png" class="d-block w-50 mx-auto" alt="">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselRecipes" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselRecipes" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </a>
</div>
<hr>

<br>
    <h2>Eventos urbanos...</h2>
      <br>
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselRecipes" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselRecipes" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselRecipes" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./imagenes/karolG.jpg" class="d-block w-50 mx-auto" alt="">
        </div>
        <div class="carousel-item">
            <img src="./imagenes/nickinicole.jpeg" class="d-block w-50 mx-auto" alt="">
        </div>
        <div class="carousel-item">
            <img src="./imagenes/natalia.jpg" class="d-block w-50 mx-auto" alt="">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselRecipes" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselRecipes" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </a>
</div>
<hr>
    <h2>Más eventos...</h2>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselRecipes" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselRecipes" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselRecipes" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./imagenes/luismi.jpg" class="d-block w-50 mx-auto" alt="">
        </div>
        <div class="carousel-item">
            <img src="./imagenes/sidhartha.jpeg" class="d-block w-50 mx-auto" alt="">
        </div>
        <div class="carousel-item">
            <img src="./imagenes/aitana.jpg" class="d-block w-50 mx-auto" alt="">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselRecipes" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselRecipes" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </a>
</div>
<hr>
</x-app-layout>