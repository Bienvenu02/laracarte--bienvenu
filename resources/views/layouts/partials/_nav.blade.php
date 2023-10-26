<div class="navbar navbar-inverse navbar-static-top" role= "navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('root_path') }}">{{ config('app.name') }}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{ set_active_route('root_path') }}"><a href="{{ route('root_path') }}">Home</a></li>
                <li class="{{ set_active_route('about_path') }}"><a href="{{ route('about_path') }}">About</a></li>
                <li class=""><a href="">Artisans</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Planet<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class=""><a href="https://laravel.com">Laravel.com</a></li>
                        <li class="#"><a href="https://laravel.io">Laravel.io</a></li>
                        <li class="#"><a href="https://laracasts.com">Laracasts</a></li>
                        <li class="#"><a href="https://larajobs.com">Larajobs</a></li>
                        <li class="#"><a href="https://laravel-news.com">Laravel News</a></li>
                        <li class="#"><a href="https://larachat.com">Larachat</a></li>
                    </ul>
                </li>
                <li class=""><a href="">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="">Login</a></li>
                <li class=""><a href="">Register</a></li>
            </ul>         
        </div>
    </div>
</div>