<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="{{asset('/')}}">Home</a>
            <a class="nav-link" href="{{asset('posts/create')}}">Create</a>

            @if (Auth::check())
                <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>
            @endif

        </nav>
    </div>
</div>

