{{-- ? we use $attributes to add any css classes was passed --}}

<div {{ $attributes->merge(['class' => 'bg-light border rounded p-3']) }}>
    {{ $slot }}
</div>
