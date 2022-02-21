@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>{{$category->title}}</h4></div>
                <div class="card-body">
                    <div class="mb-3">
                        Slug: {{$category->slug}}
                    </div>
                    @if (count($category->posts) > 0)
                    <div class="mb-3">
                        <h3>Lista Post Associati</h3>
                        <ul>
                            @foreach ($category->posts as $post)
                            <li>{{$post->title}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <a href="{{route('posts.index')}}"><button type="button" class="btn btn-primary">Torna ai post</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection