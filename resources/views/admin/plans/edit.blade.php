@extends('admin.layout')

@section('content')
    <div class="container">
        <x-form-card>
            <x-form-card-title title='Create Plan' />
            <form action="/admin/dashboard/plans/{{ $plan->id }}" method="post" class="row">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">Plan Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $plan->name }}"
                        placeholder="e.g. Premium" autofocus>
                    @error('name')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="duration" class="form-label">Duration</label>
                    <input type="text" class="form-control" id="duration" name="duration" value="{{ $plan->duration }}"
                        placeholder="e.g. 1 Year" autofocus>
                    @error('duration')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $plan->price }}"
                        placeholder="e.g. 500 DH" autofocus>
                    @error('price')
                        <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </x-form-card>
    </div>
@endsection
