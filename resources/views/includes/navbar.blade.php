<nav class="navbar navbar-expand-lg navbar-light container">
    <a class="navbar-brand" href="#">
        <img src="../frontend/images/logo.png" alt="" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Explore</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Testimonial</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
    @guest
    <form action="">
        <button href="#" class="btn btn-sign-in px-4" type="button"
            onclick="event.preventDefault(); location.href='{{ url('login')}}';"> Sign in</button>
    </form>
    @endguest

    @auth
    <form action="{{ url('logout') }}" method="POST">
        @csrf
        <button class="btn btn-sign-in px-4" type="submit"> Sign Out</button>
    </form>
    @endauth
</nav>