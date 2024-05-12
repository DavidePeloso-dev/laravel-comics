@extends('layout/app')

@section('content')
<div class="container">
    <form action="{{route('comics.update', $comic)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <lable for="title" class="form-lable">Title</lable>
            <input class="form-control" type="text" name="title" id="title" aria-describedby="titleHelper" placeholder="comic title" value="{{$comic->title}}" />
            <small id="titleHelper" class="form-text text-muted">Type the comic's title</small>
        </div>
        <div class="mb-3">
            <div class="row jc-between al-center">
                <div class="col w-80">
                    <lable for="cover_image" class="form-lable">Cover image</lable>
                    <input class="form-control" type="text" name="cover_image" id="cover_image" aria-describedby="cover_imageHelper" placeholder="comic cover_image" value="{{$comic->thumb}}" />
                    <small id="cover_imageHelper" class="form-text text-muted">Insert the comic's cover</small>
                </div>
                <div class="col-6 ">
                    <img class="cover" src="{{$comic->thumb}}" alt="">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-lable">Description</label>
            <textarea class="form-control" rows="4" name="body" id="description">{{$comic->description}}</textarea>
            <small id="descriptionHelper" class="form-text text-muted">Insert a comic's description</small>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection