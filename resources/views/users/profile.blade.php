@extends('layout')

@section('content')
    <div class="container">
        <x-form-card>
            <div class="border-bottom border-3 d-flex justify-content-between align-items-center px-3 pb-3 mb-3">
                <h1 class="h3 fw-bold roboto-slab">Profile</h1>
                <a href="/users/{{ $user->id }}/edit" class="btn btn-primary">Edit Profile</a>
            </div>
            {{-- Profile with a edit button --}}
            <div>
                <img src="{{ $user->profile_image ? asset('/storage/' . $user->profile_image) : asset('assets/no-image.jpg') }}"
                    alt="profile image" class="img-thumbnail"
                    style="width: 200px; height: 200px; object-fit: cover; object-position: center" />
            </div>
            <table class="table caption-top text-start mt-3">
                <tbody>
                    <tr>
                        <th scope="row">First Name</th>
                        <td>{{ ucfirst($user->first_name) }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Last Name</th>
                        <td>{{ ucfirst($user->last_name) }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone Number</th>
                        <td>{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Gender</th>
                        <td>{{ $user->gender }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Joined Date</th>
                        <td>{{ $user->created_at->format('Y-m-d') }}</td>
                    </tr>
                    @unless (auth()->user()->is_admin === 1)
                        <tr>
                            <th scope="row">Plan Details</th>
                            <td>
                                <div class="card border-dark">
                                    <div class="card-header d-flex justify-content-between">
                                        <label>{{ $plan->name }}</label>
                                        {{-- <input type="radio" id="{{ $plan->id }}" name="plan_id" value="{{ $plan->id }}"> --}}
                                    </div>
                                    <div class="card-body">
                                        <p class="card-title">
                                            {{ $plan->duration }}
                                        </p>
                                        <hr class="my-1">
                                        <p class="card-text">
                                            {{ $plan->price }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endunless
                </tbody>
            </table>
        </x-form-card>
    </div>
@endsection
