@extends('layout')

@section('content')
    <div class="container">
        <x-form-card>
            <x-form-card-title title='Edit' />
            <form action="/users/{{ $user->id }}" method="POST" enctype="multipart/form-data" class="row">
                @csrf
                @method('put')
                <div class="mb-3 col-md-6">
                    <label for="first_name" class="form-label">First name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        value="{{ $user->first_name }}">
                    @error('first_name')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        value="{{ $user->last_name }}">
                    @error('last_name')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email" value="{{ $user->email }}">
                    @error('email')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="phone" class="form-label">Phone number</label>
                    <input type="text" class="form-control" id="phone" aria-describedby="phone number" name="phone"
                        value="{{ $user->phone }}">
                    @error('phone')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Profil image</label>
                    <input class="form-control" type="file" id="formFile" name="profile_image"
                        value="{{ old('profile_image') }}">
                </div>
                <div>
                    <img src="{{ $user->profile_image ? asset('/storage/' . auth()->user()->profile_image) : asset('assets/no-image.jpg') }}"
                        alt="profile image" class="img-thumbnail"
                        style="width: 200px; height: 200px; object-fit: cover; object-position: center" />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    @error('password')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="password_confirmation" class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    @error('password_confirmation')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Confirm</button>
            </form>
        </x-form-card>
    </div>
@endsection
