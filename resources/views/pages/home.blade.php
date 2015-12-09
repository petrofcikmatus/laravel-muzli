@extends('master')

@section('title', 'Home')

@section('class', 'home')

@section('content')
    <article class="content container">
        <h1 class="shadow">Kickass website</h1>

        <h2 class="shadow">
            This website kicks all of the asses. All of them.<br>
            If you've got an ass, this website kicks the poo out of it.
        </h2>

        <a href="#" class="btn btn-red">Get a kick right in the pooper</a>

        <p class="small">
            Should a kick occur, which it will, your butt cheeks will resonate.<br>
            Much like the wings of a butterfly, your butt might change history.
        </p>

        <img src="{{ asset('img/marvel-yellow.png') }}" class="bigass" alt="ms marvel">
    </article>
@stop