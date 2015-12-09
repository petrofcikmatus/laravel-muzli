@extends('master')

@section('title', 'Contact')

@section('class', 'contact')

@section('content')
    <div class="content container">
        <h1 class="shadow">Send us an email</h1>

        <h2 class="shadow">
            We won't read it.
        </h2>

        <form action="#" class="contact-form">
            <label for="your-name">
                Your name (required)
                <input type="text" id="your-name" name="your-name">
            </label>

            <label for="your-email">
                Your email (required)
                <input type="email" id="your-email" name="your-email">
            </label>

            <label for="your-message">
                Your message
                <textarea id="your-message" name="your-message" cols="40" rows="10"></textarea>
            </label>

            <button class="btn btn-white">Send</button>
        </form>
    </div>
@stop