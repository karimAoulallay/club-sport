@extends('layout')

@section('content')
    <div class="container-fluid bg-light border-bottom border-dark">
        <div class="container">
            <div class="profile-header">
                PROFILE
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center align-items-md-start mt-4">
            <div class="position-relative" style="height: fit-content">
                <img src="{{ $user->profile_image ? asset('/storage/' . $user->profile_image) : asset('assets/no-image.jpg') }}"
                    alt="profile image" class="img-thumbnail rounded-circle"
                    style="width: 200px; height: 200px; object-fit: cover; object-position: center" />
                <a href="/users/{{ $user->id }}/edit"
                    class="btn btn-primary position-absolute top-100 start-50 translate-middle"
                    style="width: max-content">Edit Profile</a>
            </div>
            <table class="table profile-table caption-top text-start ms-md-5 mt-5 mt-md-0">
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
                        <td>{{ ucfirst($user->gender) }}</td>
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
        </div>
    </div>
@endsection
