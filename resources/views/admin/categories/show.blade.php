@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>{{$category->label}}</h2>
        <span class="badge badge-pill badge-{{$category->color}}">{{$category->label}}</span>
        @include('includes.deleteCategory')
    </div>
@endsection

@section('scripts')
<script src="{{ asset('js/delete-form.js')}}"></script>
@endsection