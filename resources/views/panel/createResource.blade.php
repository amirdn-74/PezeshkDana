@extends('layouts.panel')

@section('content')
    <div class="d-grid grid-tc-2">
        <div class="card mt-2">
            <form action="{{ route('resources.store') }}" method="post">
                @csrf

                <div class="card__title">
                    ایجاد منبع جدید

                    <button class="panel-btn d-flex ai-center">
                        <span class="material-icons-outlined icon ml-1">done</span>
                        ایجاد منبع
                    </button>
                </div>
                <div class="card__content mt-2">
                    <div class="mb-2">
                        <label for="name" class="label">نام:</label>
                        <input type="text" id="name" name="name" class="panel-input w-100 mt-1 mb-1"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="url" class="label">آدرس اینترنتی (آدرس کامل با http):</label>
                        <input type="text" id="url" name="url" class="panel-input w-100 mt-1"
                            value="{{ old('url') }}">
                        @error('url')
                            <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="status" class="label">وضعیت:</label>
                        <select id="status" name="status" class="panel-input mt-1 w-100">
                            <option selected disabled>--</option>
                            <option value="1">فعال</option>
                            <option value="0">غیر فعال</option>
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
