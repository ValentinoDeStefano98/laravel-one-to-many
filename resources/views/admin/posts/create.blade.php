@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('admin.posts.store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" placeholder="Titolo del post" name="title">
                </div>
                <div class="form-group">
                    <label for="content">Category</label>
                    <select name="category_id" id="category">
                        <option value="">Nessuna categoria</option>
                        @foreach ($categories as $category)
                            <option @if(old('category_id') == $category->id) selected @endif value="{{$category->id}}">{{$category->label}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="30" rows="10" placeholder="Contenuto del post"></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <textarea name="image" id="image" placeholder="Immagine del post"></textarea>
                </div>

                <hr>

                @foreach($tags as $tag)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="tag-{{$tag->id}}" value="{{$tag->id}}" name="tags[]" @if(in_array($tag->id, old('tags', [])))checked @endif>
                        <label class="form-check-label" for="tag-{{$tag->id}}">{{$tag->label}}</label>
                    </div>
                @endforeach

                <div>
                    <button type="submit" class="btn btn-success">Crea</button>
                </div>
        </form>
    </div>
@endsection

@section('scripts')

@endsection