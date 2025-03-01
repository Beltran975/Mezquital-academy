@extends('layouts.app')

@section('title', 'Noticias de Ciberseguridad - Mezquital Academy')

@section('content')
  <section class="features">
      <div class="container">
          <h2 data-aos="fade-up" data-aos-duration="1000">Noticias de Ciberseguridad</h2>

          <!-- Lista de noticias -->
          <div class="feature-grid">
              @if(!empty($news))
                  @foreach($news as $article)
                      <div class="feature-card" data-aos="fade-up" data-aos-duration="1200">
                          <i class="fas fa-newspaper"></i> 
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