@extends('layout')

@section('content')
    <div class="container">
        <x-form-card>
            <header class="roboto-slab border-bottom mb-3 text-primary">
                <h1>Register</h1>
            </header>
            <form action="/users" method="POST" enctype="multipart/form-data" class="row">
                @csrf
                @method('post')
                <label class="form-label">Choose Plan :</label>
                <div class="plans mb-3">
                    @foreach ($plans as $key => $plan)
                        <div class="card border-dark">
                            <div class="card-header d-flex justify-content-between">
                                <label for="{{ $plan->id }}">{{ $plan->name }}</label>
                                <input type="radio" id="{{ $plan->id }}" name="plan_id" value="{{ $plan->id }}"
                                    {{ $key == 0 ? 'checked' : '' }}>
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
                    @endforeach
                </div>
                <div class="mb-3 col-md-6">
                    <label for="first_name" class="form-label">First name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"
                        value="{{ old('first_name') }}">
                    @error('first_name')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name"
                        value="{{ old('last_name') }}">
                    @error('last_name')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="phone" class="form-label">Phone number</label>
                    <input type="text" class="form-control" id="phone" aria-describedby="phone number" name="phone"
                        value="{{ old('phone') }}">
                    @error('phone')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <div class="d-flex gap-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                    </div>
                    @error('gender')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Profil image</label>
                    <input class="form-control" type="file" id="formFile" name="profile_image"
                        value="{{ old('profile_image') }}">
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
                {{-- <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="5" style="resize: none"></textarea>
                </div> --}}
                <button type="submit" class="btn btn-primary">Register</button>
                <div class="mt-3">
                    Have an account?
                    <a href="/users/login"
                        class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                        login
                    </a>
                </div>
            </form>
        </x-form-card>
    </div>
@endsection
