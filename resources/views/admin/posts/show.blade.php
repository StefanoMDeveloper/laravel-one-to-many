@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{!! $post->content !!}</p>
    <p>{{ $post->slug }}</p>

    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger" onclick='return confirm("Sei sicuro?")'>Elimina</button>
    </form>

    <a href="{{ route('admin.posts.index') }}"><button type="button" class="btn btn-primary">back</button></a>
</div>
@endsection