@extends('admin.layout')

@section('content')
    <div class="container">
        <h1 class="text-primary roboto-slab bg-white my-5 p-3 rounded shadow-sm">Plans</h1>
        <x-wrapper class="mt-5 bg-white">
            <div class="border-bottom border-3 d-flex justify-content-between align-items-center px-3 pb-3">
                <h1 class="h3 fw-bold roboto-slab">All Plans</h1>
                <a href="/admin/dashboard/plans/create" class="btn btn-success fw-bold">Create Plan</a>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Price</th>
                        <th scope="col">Edit</th>
                        <th scope="col text-danger">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plans as $plan)
                        <tr>
                            <td>{{ $plan->name }}</td>
                            <td>{{ $plan->duration }}</td>
                            <td>{{ $plan->price }}</td>
                            <td><a href="/admin/dashboard/plans/{{ $plan->id }}/edit"
                                    class="text-primary btn btn-light border">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a></td>
                            <td>
                                <form action="/admin/dashboard/plans/{{ $plan->id }}" method="post">
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
        </x-wrapper>
    @endsection
