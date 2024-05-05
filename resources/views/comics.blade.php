@extends('layout/app')

@section('content')
<div class="hero-section comics"></div>
<section class="elements-section p-relative py-5">
    <div class="container">
        <h3 class="text-up badge">current series</h3>

        <div class="row">
            @foreach($comics as $comic)
            <div class="col-6">
                <div class="dc-element pointer">
                    <img class="cover" src="{{$comic['thumb']}}" alt="">
                    <h5 class="mt-1">{{$comic['title']}}</h5>
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