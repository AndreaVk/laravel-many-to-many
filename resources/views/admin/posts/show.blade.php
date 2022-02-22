@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>{{$post->title}}</h4></div>
                <div class="card-body">
                    <div class="mb-3">
                        @if ($post->image)
                        <img src="{{asset("storage/{$post->image}")}}" alt="">
                        @endif
                    </div>
                    <strong>Stato:</strong>
                    @if ($post->published)
                        <span class="badge badge-success">Pubblicato</span>
                    @else
                        <span class="badge badge-secondary">Bozza</span>
                    @endif
                    <p>{{$post->content}}</p>
                    @if ($post->category)
                        <div class="mb-3">
                            Categoria: {{$post->category->name}}
                        </div>
                    @endif
                    @if (count($post->tags) > 0)
                    <div class="mb-3">
                        <p>Tags</p>
                        @foreach ($post->tags as $tag)
                        <span class="badge badge-primary">{{$tag->name}}</span>
                        @endforeach
                    </div>
                    @endif
                    <a href="{{route('posts.index', $post->id)}}"><button type="button" class="btn btn-primary">Torna ai post</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection