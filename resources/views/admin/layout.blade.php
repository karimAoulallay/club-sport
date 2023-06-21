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

<body class="bg-light">
    {{-- header section --}}
    <header class="dashboard-header bg-dark">
        <div class="container">
            <nav class="navbar navbar-dark bg-dark navbar-expand-md text-center">
                <a class="navbar-brand text-light bg-primary px-3 rounded" href="/">
                    <i class="fa-solid fa-house"></i>
                    <span class="ms-2">Home</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
                    <ul class="navbar-nav gap-3 ms-auto mb-2">
                        <li class="nav-item">
                            <a class="nav-link roboto-slab fw-bold text-white {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                                aria-current="page" href="/admin/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link roboto-slab fw-bold text-white {{ request()->is('admin/dashboard/members') ? 'active' : '' }}"
                                aria-current="page" href="/admin/dashboard/members">Members</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link roboto-slab fw-bold text-white {{ request()->is('admin/dashboard/activities') ? 'active' : '' }}"
                                aria-current="page" href="/admin/dashboard/activities">Activities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link roboto-slab fw-bold text-white {{ request()->is('admin/dashboard/plans') ? 'active' : '' }}"
                                aria-current="page" href="/admin/dashboard/plans">Plans</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="main-dashboard">
        @yield('content')
    </main>
</body>

</html>
