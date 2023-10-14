@extends('layouts.app')

@section('page-title', 'Lista dei Film')

@section('main-content')
    <section>
        <div class="py-2">
            <div class="container">
                <div class="row row-cols-2 g-3">
                    @forelse($movies as $movie)
                        <div class="col">
                            <div class="card text-center border-0">
                                <div class="card-body">
                                    <h5 class="card-title">Titolo: {{ $movie->title }} </h5>
                                    <h5 class="card-title">Titolo Originale: {{ $movie->originale_title }} </h5>
                                    <p class="card-text">Nazionalità: {{ $movie->nationality }} </p>
                                    <p class="card-text">Data di uscita: {{ $movie->date }} </p>
                                    <p class="card-text">Voto: {{ $movie->vote }} </p>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="col">
                            <p>Nessun film disponibile al momento. </p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
