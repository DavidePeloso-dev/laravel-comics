@extends('layout/app')

@section('content')
<div class="hero-section movies"></div>
<section class="elements-section p-relative py-5">
    <div class="container">
        <h3 class="text-up badge">current movies</h3>

        <div class="row">
            @foreach($movies as $movie)
            <div class="col-6">
                <div class="dc-element pointer">
                    <img class="cover" src="{{$movie['poster']}}" alt="">
                    <h5 class="mt-1">{{$movie['title']}}</h5>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row jc-center">
            <div class="btn text-up pointer"> load more</div>
        </div>
    </div>
</section>
@endsection