@extends('layouts.app')

@section('content')
<header class="text-center">
    <h1 class="col-md-5 mx-auto">
        See and Explore the World You Living Right Now
    </h1>
    <p class="col-md-5 mx-auto mt-3">
        Travel around the world so you can see beauty that you've never seen
        before with Travelify. Travelify provides a variety of travel packages
        for your vacation
    </p>
    <a href="{{ route('register')}}" class="btn btn-get-started px-4 mt-3">Get started <i
            class="lni lni-arrow-right"></i></a>
</header>

<section class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="plyr__video-embed" id="player">
                    <iframe
                        src="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                        allowfullscreen allowtransparency allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container text-center">
    <section class="partner-section p-4">
        <hr />
        <div class="row mt-4 mb-4">
            <div class="col-md-2 col-sm-12">
                <img src="frontend/images/airbnb.png" alt="" srcset="" />
            </div>
            <div class="col-md-2 col-sm-12">
                <img src="frontend/images/hubspot.png" alt="" srcset="" />
            </div>
            <div class="col-md-2 col-sm-12">
                <img src="frontend/images/google.png" alt="" srcset="" />
            </div>
            <div class="col-md-2 col-sm-12">
                <img src="frontend/images/microsoft.png" alt="" srcset="" />
            </div>
            <div class="col-md-2 col-sm-12">
                <img src="frontend/images/walmart.png" alt="" srcset="" />
            </div>
            <div class="col-md-2 col-sm-12">
                <img src="frontend/images/fedex.png" alt="" srcset="" />
            </div>
        </div>
        <hr />
    </section>
</div>

<section class="popular-section justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h1>Popular Destination</h1>
                <p>Explore the popular destination that you have not seen before</p>
            </div>
        </div>
        <div class="row">
            @foreach ($items as $item)
            <div class="col-md-4 col-sm-6 col-lg-3">
                <div class="popular-destination-card text-center d-flex flex-column my-auto"
                    style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}')">
                    <div class="region-title">{{ $item->location }}</div>
                    <div class="destination-title">{{ $item->title}}</div>
                    <div class="popular-destination-card-button mt-auto">
                        <a href="{{ route('details', $item->slug) }}" class="btn btn-details px-4">More details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="testimonial-section mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h1>What Travelers Say About Us</h1>
                <p>
                    Let's see what they say about us, but i guarantee they loving us!
                </p>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <figure class="snip1533">
                        <figcaption>
                            <blockquote>
                                <p>
                                    If you do the job badly enough, sometimes you don't get
                                    asked to do it again.
                                </p>
                            </blockquote>
                            <h3>Wisteria Ravenclaw</h3>
                            <h4>Google Inc.</h4>
                        </figcaption>
                    </figure>
                    <figure class="snip1533">
                        <figcaption>
                            <blockquote>
                                <p>
                                    I'm killing time while I wait for life to shower me with
                                    meaning and happiness.
                                </p>
                            </blockquote>
                            <h3>Ursula Gurnmeister</h3>
                            <h4>Facebook</h4>
                        </figcaption>
                    </figure>
                    <figure class="snip1533">
                        <figcaption>
                            <blockquote>
                                <p>
                                    The only skills I have the patience to learn are those
                                    that have no real application in life.
                                </p>
                            </blockquote>
                            <h3>Ingredia Nutrisha</h3>
                            <h4>Twitter</h4>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lottie-section mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h1>Enjoy the Advanced Navigation Technology</h1>
                <p>
                    Travelify providing advanced apps to make your travel better than
                    never!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <lottie-player src="https://assets7.lottiefiles.com/temp/lf20_j1duSs.json" background="transparent"
                    speed="1" autoplay loop></lottie-player>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mt-4 mx-auto text-center">
                <p>
                    Leverage agile frameworks to provide a robust synopsis for high
                    level overviews. Iterative approaches to corporate strategy foster
                    collaborative thinking to further the overall value proposition.
                    Organically grow the holistic world view of disruptive innovation
                    via workplace diversity and empowerment.
                </p>
                <a class="btn btn-get-started px-4" href="{{ route('register') }}">Get Started <i
                        class="lni lni-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="card-section mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-white card-last p-4">
                <h1>Explore our service and travel package</h1>
                <p>
                    Bring to the table win-win survival strategies to ensure proactive
                    domination. At the end of the day, going forward, a new normal
                    that has evolved from generation X is on the runway heading
                    towards a streamlined cloud solution. User generated content in
                    real-time will have multiple touchpoints for offshoring.
                </p>
                <a href="#" class="btn btn-light px-4">Explore <i class="lni lni-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection