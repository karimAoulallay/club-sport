@extends('admin.layout')

@section('content')
    <div class="container">
        <x-form-card>
            <x-form-card-title title='Create Activity' />
            <form action="/admin/dashboard/activities" method="POST" enctype="multipart/form-data" class="row">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="name" class="form-label">Activity Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
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
                    <textarea class="form-control" name="description" id="description" cols="30" rows="5" style="resize: none"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </x-form-card>
    </div>
@endsection
