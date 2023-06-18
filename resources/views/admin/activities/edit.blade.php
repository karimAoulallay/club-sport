@extends('admin.layout')

@section('content')
    <x-form-card>
        <x-form-card-title title='Edit Activity' />
        <form action="/admin/dashboard/activities/{{ $activity->id }}" method="post" enctype="multipart/form-data"
            class="row">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label roboto-slab">Activity Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $activity->name }}"
                    autofocus>
                @error('name')
                    <p class="text-danger mb-0" style="font-size: 13px">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Activity image</label>
                <input class="form-control" type="file" id="formFile" name="activity_image"
                    value="{{ old('activity_image') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="5" style="resize: none">{{ $activity->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </x-form-card>
@endsection
