@props(['title', 'paragraph', 'image'])

<div class="page_cover d-flex align-items-center">
    <img src="{{ asset($image) }}" alt="banner image">
    <div class="container d-flex flex-column align-items-center text-center align-items-md-start text-md-start">
        <h1 class="fw-bold roboto-slab text-white">
            <span class="text-primary">{{ $title }}</span>
        </h1>
        <p class="text-light">
            {{ $paragraph }}
        </p>
    </div>
</div>
