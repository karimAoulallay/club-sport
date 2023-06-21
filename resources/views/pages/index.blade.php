@extends('Layout')

@section('content')
    {{-- hero section --}}
    <div id="hero" class="index text-center d-flex align-items-center">
        <div class="container position-relative">
            <h1 class="text-light fw-bold display-1 roboto-slab">
                Welcome to <br />
                <span class="text-primary">Dream Club</span>
            </h1>
            <p class="text-light fs-2">The club for all your needs</p>
            <div aria-label="social links" id="socials" class="d-flex gap-3">
                <a href="#"
                    class="rounded bg-primary d-flex justify-content-center align-items-center text-decoration-none"
                    style="width: 30px; height: 30px">
                    <i class="fa-brands fa-youtube" style="color: #000000"></i>
                </a>
                <a href="#"
                    class="rounded bg-primary d-flex justify-content-center align-items-center text-decoration-none"
                    style="width: 30px; height: 30px">
                    <i class="fa-brands fa-facebook" style="color: #000000"></i>
                </a>
                <a href="#"
                    class="rounded bg-primary d-flex justify-content-center align-items-center text-decoration-none"
                    style="width: 30px; height: 30px">
                    <i class="fa-brands fa-instagram" style="color: #000000"></i>
                </a>
            </div>
        </div>
    </div>
    {{-- features section --}}
    <div id="features" class="py-5">
        <div class="container">
            <h2 class="text-primary display-6 text-center fw-bold">
                Discover our features
            </h2>
            <div class="d-flex justify-content-center flex-wrap gap-5 pt-5">
                <div class="card shadow" style="width: 18rem">
                    <div class="image-container overflow-hidden">
                        <img src="./assets/feature-activity.jpg" class="card-img-top" alt="activity image" />
                    </div>
                    <div class="card-body bg-body-secondary">
                        <h5 class="card-title fw-bold text-primary">Activities</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the cards content.
                        </p>
                        <a href="/activities" class="btn btn-primary">
                            Explore more
                        </a>
                    </div>
                </div>
                <div class="card shadow" style="width: 18rem">
                    <div class="image-container overflow-hidden">
                        <img src="./assets/feature-membership.jpg" class="card-img-top" alt="activity image" />
                    </div>
                    <div class="card-body bg-body-secondary">
                        <h5 class="card-title fw-bold text-primary">Plans</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the cards content.
                        </p>
                        <a href="/plans" class="btn btn-primary">
                            Explore more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
