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
    <div id="features" class="pt-5">
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
                        <img src="./assets/feature-trainer.jpg" class="card-img-top" alt="activity image" />
                    </div>
                    <div class="card-body bg-body-secondary">
                        <h5 class="card-title fw-bold text-primary">Trainers</h5>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up
                            the bulk of the cards content.
                        </p>
                        <a href="/trainers" class="btn btn-primary">
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
    {{-- Accordion section --}}
    <div id="accordion" class="py-5">
        <div class="container">
            <h2 class="text-primary display-6 text-center fw-bold roboto-slab">
                Frequently Asked Questions
            </h2>
            <div class="accordion accordion-flush mx-auto mt-5" id="accordionFlushExample" style="max-width: 50rem">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Should i do strength training, cardio or both ?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is
                            the first items accordion body.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Do i need to warm up befor my workout ?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is
                            the second items accordion body. Lets imagine this being filled
                            with some actual content.

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            What time of the day is the best to workout ?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the
                            third items accordion body. Nothing more exciting happening here
                            in terms of content, but just filling up the space to make it
                            look, at least at first glance, a bit more representative of how
                            this would look in a real-world application.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
