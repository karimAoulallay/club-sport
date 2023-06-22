@extends('admin.layout')

@section('content')
    <div class="container h-100">

        <h1 class="text-primary roboto-slab bg-white my-5 p-3 rounded shadow-sm">Dashboard</h1>

        <section class="dashboard-resume">
            <div class="d-flex align-items-center text-light bg-primary p-3 rounded-4">
                <div class="display-6 px-3">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="fs-4 roboto-slab ms-3">
                    Members <br>
                    {{ count($members) - 1 }}
                </div>
            </div>
            <div class="d-flex align-items-center text-white bg-danger p-3 rounded-4">
                <div class="display-6 px-3 ">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="fs-4 roboto-slab ms-3">
                    Plans <br>
                    {{ count($plans) - 1 }}
                </div>
            </div>
            <div class="d-flex align-items-center bg-success text-light p-3 rounded-4">
                <div class="display-6 px-3">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div class="fs-4 roboto-slab ms-3">
                    Activities <br>
                    {{ count($activities) }}
                </div>
            </div>
        </section>

        <section class="bg-white rounded shadow-sm p-3 mt-5">
            <div class="my-3 d-flex justify-content-between">
                <h2 class="h4 roboto-slab">Recent members</h2>
                <a href="/admin/dashboard/members" class="btn btn-primary">View All</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Profile</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentMembers as $member)
                        <tr>
                            <th scope="row"><img
                                    src="{{ $member->profile_image ? asset('storage/' . $member->profile_image) : asset('assets/no-image.jpg') }}"
                                    alt="profile image" style="height: 50px" class="img-thumbnail">
                            </th>
                            <td>{{ ucfirst($member->first_name) }} {{ ucfirst($member->last_name) }}</td>
                            <td>{{ $member->created_at->format('Y-m-d') }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <section class="bg-white  rounded shadow-sm p-3 mt-5">
            <div class="my-3 d-flex justify-content-between">
                <h2 class="h4 roboto-slab">Recent Activity</h2>
                <a href="/admin/dashboard/activities" class="btn btn-primary">View All</a>
            </div>
            <div class="mt-4">
                <div class="card mb-3 bg-dark-subtle" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="{{ asset('storage/' . $recentActivity->activity_image) }}"
                                class="img-fluid rounded-start h-100" style="object-fit: cover; object-position: center"
                                alt="activity">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title roboto-slab text-primary h3">{{ $recentActivity->name }}</h5>
                                <p class="card-text">
                                    {{ $recentActivity->description }}
                                <p class="card-text">
                                    <small class="text-body-secondary">Create at {{ $recentActivity->created_at }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white  rounded shadow-sm p-3 mt-5">
            <div class="my-3 d-flex justify-content-between">
                <h2 class="h4 roboto-slab">Recent Plan</h2>
                <a href="/admin/dashboard/activities" class="btn btn-primary">View All</a>
            </div>
            <div class="mt-4">
                <div class="card border-dark w-25 text-center">
                    <div class="card-header text-primary bg-info-subtle fw-bold">
                        <label>{{ $recentPlan->name }}</label>
                    </div>
                    <div class="card-body">
                        <p class="card-title">
                            {{ $recentPlan->duration }}
                        </p>
                        <hr class="my-1">
                        <p class="card-text">
                            {{ $recentPlan->price }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
