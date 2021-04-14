@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')  

    <h1>Listado de post</h1>

    <a class="btn btn-primary mt-4" href="{{route('admin.posts.create')}}">Nuevo post</a>

@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    
    @livewire('admin.posts-index')
@stop

