@extends('main')


@section('home-content')

    <section class="container">
        <div class="title-box">
            <h2 class="text-uppercase">Current Series</h2>
        </div>
        <div class="row flewx-wrap">
            @foreach ($comics as $comic)               
            <div class="cards">
                <figure>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </figure>
                <figcaption>{{ $comic['series'] }}</figcaption>
            </div>
            @endforeach  
        </div>  
        <div>
            <button class="bg-primary text-uppercase text-white">Load More</button>
        </div>
    </section>
@endsection