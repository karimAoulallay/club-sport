@extends('layout')

@section('content')
    <div class="container text-center">
        <div class="py-5 roboto-slab">
            <h1 class="text-primary display-6">Plans & Pricing</h1>
            <p>Choose the plan that suits you</p>
        </div>
        <div class="d-flex justify-content-center flex-wrap gap-3 roboto-slab mb-5">
            @foreach ($plans as $plan)
                <div class="bg-body-secondary border border-2 border-primary p-3" style="width: min(200px, 100%)">
                    <div class="fw-bold fs-2">{{ $plan->name }}</div>
                    <hr>
                    <div class="fs-4">{{ $plan->price }}</div>
                    <div class="fs-5">{{ $plan->duration }}</div>
                    <hr>
                    <a href="/users/register" class="btn btn-primary w-100">Get Plan</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
