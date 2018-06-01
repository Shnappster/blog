<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">

            @if (Auth::check())
                <a class="nav-link active" href="{{asset('/')}}">Home</a>
                <a class="nav-link" href="{{asset('posts/create')}}">Create</a>
            @else
                <a class="nav-link" href="/register">Register</a>
                <a class="nav-link" href="/login">Login</a>
            @endif

            @if (Auth::check())
                    <a class="nav-link ml-auto border-right" href="#">{{Auth::user()->name}}</a>
                    <a class="nav-link" href="/logout">Logout</a>
            @endif

            @include('layouts.errors')

        </nav>
    </div>
</div>

