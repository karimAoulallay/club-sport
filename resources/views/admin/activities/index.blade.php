@extends('admin.layout')

@section('content')
    {{-- <div class="container"> --}}
    <div class="container">
        <h1 class="text-primary roboto-slab bg-white my-5 p-3 rounded shadow-sm">Activities</h1>
        <x-wrapper class="mt-5 bg-white mb-5">
            <div class="border-bottom border-3 d-flex justify-content-between align-items-center px-3 pb-3">
                <h1 class="h3 fw-bold roboto-slab">All Activities</h1>
                <a href="/admin/dashboard/activities/create" class="btn btn-success fw-bold">Create Activity</a>
            </div>
            <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-md-start mt-4">
                @unless (count($activities) == 0)
                    @foreach ($activities as $activity)
                        <div class="card shadow" style="width: 18rem">
                            <div class="image-container overflow-hidden">
                                <img src="{{ $activity->activity_image ? asset('storage/' . $activity->activity_image) : asset('assets/no-image.jpg') }}"
                                    class="card-img-top" alt="activity image" />
                            </div>
                            <div class="card-body bg-body-secondary">
                                <h5 class="card-title fw-bold text-primary">{{ $activity->name }}</h5>
                                <p class="card-text">
                                    {{ $activity->description }}
                                </p>
                                <p class="card-text"><small class="text-body-secondary">Last updated
                                        {{ $activity->updated_at }}</small></p>
                                <a href="/admin/dashboard/activities/{{ $activity->id }}/edit" class="btn btn-primary">
                                    Edit
                                </a>
                                <form action="/admin/dashboard/activities/{{ $activity->id }}" method="post"
                                    class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <b>No Activity</b>
                @endunless
            </div>
        </x-wrapper>
    </div>
@endsection



{{-- <div class="card shadow" style="width: 18rem">
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
</div> --}}
