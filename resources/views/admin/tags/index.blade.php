@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tags List</div>

                <div class="card-body">
                <a href="{{route('tags.create')}}"><button type="button" class="btn btn-success my-3">Aggiungi Tag</button></a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Slug</th>
                                <th scope='col'>Azioni</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                            <tr>
                                <td>{{$tag->id}}</td>
                                <td>{{$tag->name}}</td>
                                <td>{{$tag->slug}}</td>

                                <td>
                                    <a href="{{route('tags.show', $tag->id)}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
                                </td>
                                <td>
                                    <a href="{{route('tags.edit', $tag->id)}}"><button type="button" class="btn btn-secondary">Modifica</button></a>
                                </td>
                                <td>
                                    <form action="{{route('tags.destroy', $tag->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Elimina</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection