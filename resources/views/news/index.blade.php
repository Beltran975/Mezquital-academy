@extends('layouts.app')

@section('title', 'Noticias de Ciberseguridad - Mezquital Academy')

@section('content')
<!-- Hero Section para Noticias -->
<section class="hero">
    <div class="container">
        <h1 data-aos="fade-up" data-aos-duration="1000">Noticias de Ciberseguridad</h1>
        <p data-aos="fade-up" data-aos-duration="1200">
            Mantente informado con las últimas novedades, tendencias y análisis en el mundo de la ciberseguridad.
        </p>
    </div>
</section>

<section class="features">
    <div class="container">
        <h2 data-aos="fade-up" data-aos-duration="1000">Noticias de Ciberseguridad</h2>

        <!-- Lista de noticias -->
        <div class="feature-grid">
            @if(!empty($news))
                @foreach($news as $article)
                    <div class="feature-card" data-aos="fade-up" data-aos-duration="1200">
                        <!-- Mostrar la imagen de la noticia -->
                        @if(isset($article['urlToImage']) && $article['urlToImage'])
                            <div class="news-image">
                                <img src="{{ $article['urlToImage'] }}" alt="{{ $article['title'] }}" class="img-fluid">
                            </div>
                        @endif

                        <h3>{{ $article['title'] }}</h3>
                        <p>
                            <small class="text-white">
                                Publicado por <strong>{{ $article['source']['name'] }}</strong> el {{ \Carbon\Carbon::parse($article['publishedAt'])->format('d/m/Y H:i') }}
                            </small>
                        </p>
                        <a href="{{ $article['url'] }}" target="_blank" class="btn btn-primary">Leer más</a>
                    </div>
                @endforeach
            @else
                <p data-aos="fade-up" data-aos-duration="1000">No se encontraron noticias.</p>
            @endif
        </div>
    </div>
</section>
@endsection