
@extends('layouts.main')

@section('title', $post->title)

@section('content')
<div class="btn-group mb-4" role="group" aria-label="Basic outlined example">
@foreach($categories as $category)
        <a href="{{route('getPostByCategory', $category->slug)}}" class="btn btn-outline-primary ">{{$category->title}}</a>
@endforeach
    </div>
    <a href="#" class="btn btn-outline-primary mb-4">Back</a>
    <article>
        {!! $post->text !!}
    </article>


@endsection