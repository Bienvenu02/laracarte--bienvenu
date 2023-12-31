@extends('layouts.default', ['title' => 'About'])

@section('content')
    <div class="container">
        <h2>What is {{ config('app.name') }}</h2>
        <p>{{ config('app.name') }} is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>
        
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="icon-exclamation" aria-hidden="true"></i> This app has been built by <a href="https://twitter.com/@bien03">@bien03</a> for learning purposes.</strong>
                </p>
            </div>
        </div>

        <p>feel free to help to improve the <a href="https://github.com/Bienvenu02/laracarte--bienvenu">source code</a></p>

        <hr>

        <h2>What is Laramap?</h2>
        <p>Laramap is the website by which Laracarte was inspired :).</p>
        <p>More info <a href="https://laramap.com/p/about">here.</a></p>

        <hr>

        <h2>Which tools and services are in {{ config('app.name') }}?</h2>
        <p>Basically it's built on laravel & Bootstrat. But there's a bunch of services used for and other sections.</p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Mandrill</li>
            <li>Antony Martin's</li>
            <li>Michael Fortin's</li>
            <li>Heroku</li>
            
        </ul>
    </div>
@endsection