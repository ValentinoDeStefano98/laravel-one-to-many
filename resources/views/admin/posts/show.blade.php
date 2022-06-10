@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <img src="{{$post->image}}" alt="{{$post->title}}" class="pb-3 img-fluid">
        <h2>{{$post->title}}</h2>
        @if($post->category)
            <span class="badge badge-pill badge-{{$post->Category->color}}">{{$post->Category->label}}</span>
        @else
            -
        @endif
        <p>{{$post->content}}</p>

        <h3>tags:</h3>
        @forelse ($post->tags as $tag)
            <span class="badge badge-primary">{{$tag->label}}</span>

        @empty
            <h3>Non ci sono tag</h3>
        @endforelse
        <!-- <form action="{{route('admin.posts.destroy', $post->id)}}" method="POST" class="delete-form">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form> -->
        @include('includes.deletePost')
    </div>
@endsection

@section('scripts')
<script src="{{ asset('js/delete-form.js')}}"></script>
@endsection