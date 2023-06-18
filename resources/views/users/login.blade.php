@extends('layout')

@section('content')
    <div class="container">
        <x-form-card>
            <x-form-card-title title='Login' />
            <form method="POST" action="/users/authenticate">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email" value="{{ old('email') }}" autofocus>
                    @error('email')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                        value="{{ old('password') }}">
                    @error('password')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <div class="mt-3">
                    Don't have an account?
                    <a href="/users/register"
                        class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                        Register
                    </a>
                </div>
            </form>
        </x-form-card>
    </div>
@endsection
