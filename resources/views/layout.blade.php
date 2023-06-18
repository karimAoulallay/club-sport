<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dream club</title>
    {{-- Favicons --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-dark.png') }}"
        media="(prefers-color-scheme: dark)" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-light.png') }}"
        media="(prefers-color-scheme: light)" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab:wght@700&display=swap"
        rel="stylesheet" />
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    {{-- header section --}}
    <header class="py-2 bg-dark">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand fw-bold fs-4"
                    href="\">
                    Dream<span class="text-primary">Club</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center gap-3">
                        <li class="nav-item">
                            <a href="/about" class="nav-link">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/activities" class="nav-link">
                                Activities
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/plans" class="nav-link">
                                Plans
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="/membership" class="nav-link">
                                Membership
                            </a>
                        </li> --}}
                        <span style="flex-basis: 1px; padding: 1px; background-color: white; border-radius: 1rem">
                        </span>
                        @auth
                            <li>
                                @if (auth()->user()->is_admin === 1)
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Welcome Admin
                                        </button>
                                        <ul class="dropdown-menu" style="left: auto !important; right: 0 !important">
                                            <li>
                                                <a class="dropdown-item" href="/admin/dashboard">
                                                    <i class="fa-solid fa-gauge"></i>
                                                    Dashboard
                                                </a>
                                            </li>
                                            <li>
                                                <form action="/logout" method="post" class="inline hover:text-laravel">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="fa-solid fa-arrow-right-from-bracket me-1"></i>
                                                        Log out
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ auth()->user()->profile_image ? asset('/storage/' . auth()->user()->profile_image) : asset('assets/no-image.jpg') }}"
                                                alt="profil image" class="profil rounded-circle"
                                                style="height: 30px; width: 30px; object-fit: cover; object-position: center">
                                        </button>
                                        <ul class="dropdown-menu" style="left: auto !important; right: 0 !important">
                                            <li>
                                                <a class="dropdown-item" href="/users/{{ auth()->user()->id }}/profile">
                                                    <i class="fa-regular fa-user me-1"></i>
                                                    Profile
                                                </a>
                                            </li>
                                            <li>
                                                <form action="/logout" method="post" class="inline hover:text-laravel">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item text-danger">
                                                        <i class="fa-solid fa-arrow-right-from-bracket me-1"></i>
                                                        Log out
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                @endif
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="/users/register" class="nav-link">
                                    Register
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/users/login" class="btn btn-primary">
                                    Login
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    {{-- footer section --}}
    <footer class="bg-dark text-light py-3">
        <div class="container">
            <div
                class="d-flex flex-column align-items-center gap-3 flex-md-row justify-content-between align-items-center">
                <a class="navbar-brand fw-bold fs-4"
                    href="\">
                    Dream<span class="text-primary">Club</span>
                </a>
                <p class="m-0">&copy; 2023 Company - All Rights Reserved.</p>
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
    </footer>
</body>

</html>
