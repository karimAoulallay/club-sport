@props(['title'])

<header {{ $attributes->merge(['class' => 'roboto-slab border-bottom mb-3 text-primary']) }}>
    <h1>{{ $title }}</h1>
</header>
