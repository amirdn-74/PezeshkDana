@extends('layouts.panel')

@section('content')
    <div class="d-grid grid-tc-2">
        <div class="card mt-2">
            <form action="{{ route('resources.update', $resource->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="card__title">
                    ویرایش منبع

                    <button class="panel-btn d-flex ai-center">
                        <span class="material-icons-outlined icon ml-1">done</span>
                        ویرایش
                    </button>
                </div>
                <div class="card__content mt-2">
                    <div class="mb-2">
                        <label for="name" class="label">نام:</label>
                        <input type="text" id="name" name="name" class="panel-input w-100 mt-1 mb-1"
                            value="{{ old('name', $resource->name) }}">
                        @error('name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="url" class="label">آدرس اینترنتی (آدرس کامل با http):</label>
                        <input type="text" id="url" name="url" class="panel-input w-100 mt-1"
                            value="{{ old('url', $resource->url) }}">
                        @error('url')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="status" class="label">وضعیت:</label>
                        <select id="status" name="status" class="panel-input mt-1 w-100">
                            <option selected disabled>--</option>
                            <option value="1" {{ $resource->status == 1 ? 'selected' : '' }}>فعال</option>
                            <option value="0" {{ $resource->status == 0 ? 'selected' : '' }}>غیر فعال
                            </option>
                        </select>
                        @error('status')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
