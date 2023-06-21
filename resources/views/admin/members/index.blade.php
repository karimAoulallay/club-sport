@extends('admin.layout')

@section('content')
    {{-- <div class="container"> --}}
    <div class="container">
        <h1 class="text-primary roboto-slab bg-white my-5 p-3 rounded shadow-sm">Members</h1>
        <div class="container bg-white rounded shadow-sm">
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Profile</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Email</th>
                        <th scope="col">Number Phone</th>
                        <th scope="col text-danger">Remove</th>
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
                            <td>
                                <form action="/admin/dashboard/{{ $user->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-light border">
                                        <i class="fa-solid fa-trash-can text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-6 p-4">
                {{ $users->links() }}
            </div>
        </div>
    @endsection
