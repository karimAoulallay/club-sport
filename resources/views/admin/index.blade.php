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

        <section class="bg-white  rounded shadow-sm p-3 mt-5">
            <div class="my-3 d-flex justify-content-between">
                <h2 class="h4 roboto-slab">Last members</h2>
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
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row"><img
                                    src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('assets/no-image.jpg') }}"
                                    alt="profile image" style="height: 50px" class="img-thumbnail">
                            </th>
                            <td>{{ ucfirst($user->first_name) }} {{ ucfirst($user->last_name) }}</td>
                            <td>{{ $user->created_at->format('Y-m-d') }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
@endsection
