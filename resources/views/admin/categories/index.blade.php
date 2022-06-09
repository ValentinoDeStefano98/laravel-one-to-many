@extends('layouts.app')

@section('content')
    <div class="container">

        @if ( session('message') )
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="pb-4">
            <a href="{{route('admin.categories.create')}}" class="btn btn-success">Crea post</a>
        </div>
        

        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">Label</th>
                <th scope="col">Color</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <th>{{$category->label}}</th>
                        <td>
                            <p>{{$category->color}}</p>
                        </td>
                        <td class="d-flex">
                            <a href="{{route('admin.categories.show', $category->id)}}" class="btn btn-primary">View</a>
                            @include('includes.deleteCategory')
                            <a href="{{route('admin.categories.edit', $category->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @empty
                    <h2>Non ci sono categorie</h2>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('js/delete-form.js')}}"></script>
@endsection