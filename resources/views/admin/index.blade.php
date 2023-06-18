@extends('admin.layout')

@section('content')
    <div class="container">

        <div class="mt-5 dashboard-resume">
            <div class="d-flex align-items-center bg-dark-subtle p-3 rounded-4">
                <div class="display-6 px-3 text-primary">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="fs-4 roboto-slab ms-3">
                    Members <br>
                    {{ count($members) - 1 }}
                </div>
            </div>
            <div class="d-flex align-items-center bg-dark-subtle p-3 rounded-4">
                <div class="display-6 px-3 text-danger">
                    <i class="fas fa-tasks"></i>
                </div>
                <div class="fs-4 roboto-slab ms-3">
                    Plans <br>
                    {{ count($plans) - 1 }}
                </div>
            </div>
            <div class="d-flex align-items-center bg-dark-subtle p-3 rounded-4">
                <div class="display-6 px-3 text-success">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <div class="fs-4 roboto-slab ms-3">
                    Activities <br>
                    {{ count($activities) }}
                </div>
            </div>
        </div>

        <div class="py-3 d-flex justify-content-between">
            <h2 class="h4">Last members</h2>
            <a href="/admin/dashboard/members" class="btn btn-primary">View All</a>
        </div>
        <table class="table bg-light">
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
    </div>
@endsection
