@extends('master')

@section('title', 'Gallery')

@section('class', 'gallery')

@section('content')
    <section class="content container">
        <h1 class="shadow">Sweet Gallery</h1>

        <h2 class="shadow">It's got images in it.</h2>

        <div class="image-grid group">
            <img src="{{ asset('img/01.png') }}" class="gallery-img" alt="ms marvel">
            <img src="{{ asset('img/02.png') }}" class="gallery-img" alt="ms marvel">
            <img src="{{ asset('img/03.png') }}" class="gallery-img" alt="ms marvel">
            <img src="{{ asset('img/04.png') }}" class="gallery-img" alt="ms marvel">
            <img src="{{ asset('img/05.png') }}" class="gallery-img" alt="ms marvel">
            <img src="{{ asset('img/06.png') }}" class="gallery-img" alt="ms marvel">
        </div>
    </section>
@stop