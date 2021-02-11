<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Assistant:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.4/plyr.css" />
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet" />
    <title>Travelify — See and Explore the World You Living Right Now!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light container">
        <a class="navbar-brand" href="#">
            <img src="../frontend/images/logo.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a href="#" class="btn btn-sign-in px-4"> Sign in</a>
    </nav>

    @yield('content')

    <hr />
    <section class="footer-section mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="mb-4">Features</h3>
                    <p>Reviews</p>
                    <p>Community</p>
                    <p>Social Media Kit</p>
                    <p>Affiliate</p>
                </div>
                <div class="col-md-3">
                    <h3 class="mb-4">Account</h3>
                    <p>Refund</p>
                    <p>Security</p>
                    <p>Reward</p>
                </div>
                <div class="col-md-3">
                    <h3 class="mb-4">Company</h3>
                    <p>Career</p>
                    <p>Help Center</p>
                    <p>Media</p>
                </div>
                <div class="col-md-3">
                    <h3 class="mb-4">Get Connected</h3>
                    <h5>
                        Jakarta Selatan <br />
                        Indonesia 0821 - 2222 - 8888 <br />
                        support@nomads.id
                    </h5>
                </div>
            </div>
        </div>
    </section>
    <hr />

    <section class="copyright-section text-center m-4">
        <h5>
            2019 Copyright SYAUQIZAIDAN • All rights reserved • Made with 💗 with
            Laravel, Bootstrap
        </h5>
    </section>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.plyr.io/3.6.4/plyr.polyfilled.js"></script>
    <script>
        const player = new Plyr("#player");
    </script>
    <script src="{{ url('frontend/libraries/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
</body>

</html>