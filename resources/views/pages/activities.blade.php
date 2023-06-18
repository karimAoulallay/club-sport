@extends('Layout')

@section('content')
    <x-banner title='Activities List' image='assets/page_activities.jpg'
        paragraph='Experience the thrill of boxing, the joy of swimming, and the energy of fitness training. Join us for anactive and engaging journey towards a healthier lifestyle.' />
    <div>
        <div class="container">
            @unless (count($activities) == 0)
                @foreach ($activities as $activity)
                    <div class="activity-item">
                        <img src="{{ $activity->activity_image ? asset('storage/' . $activity->activity_image) : asset('assets/no-image.jpg') }}"
                            class="img" alt="activity image">
                        <div class="body">
                            <h1 class="roboto-slab fw-bold text-primary">{{ $activity->name }}</h1>
                            <p>
                                {{ $activity->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @else
                <b>No Activity</b>
            @endunless
        </div>
    </div>
@endsection
